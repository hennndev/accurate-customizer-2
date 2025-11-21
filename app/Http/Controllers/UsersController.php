<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index', compact('users'));
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
      'role' => 'required|string|in:Admin,Super Admin',
      'status' => 'required|string|in:Active,Inactive',
    ], [
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'email.email' => 'Please enter a valid email address',
      'email.unique' => 'This email address is already registered',
      'password.required' => 'Password is required',
      'password.min' => 'Password must be at least 8 characters',
      'password.confirmed' => 'Password confirmation does not match',
      'role.required' => 'Role is required',
      'status.required' => 'Status is required',
    ]);

    $user = User::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => bcrypt($validated['password']),
      'role' => $validated['role'],
      'status' => $validated['status'],
    ]);
    $user->assignRole($validated['role']);
    return redirect()->route('users.index')->with('success', 'User created successfully.');
  }

  public function update(Request $request, User $user)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
      'password' => 'nullable|string|min:8|confirmed',
      'role' => 'required|string|in:Admin,Super Admin',
      'status' => 'required|string|in:Active,Inactive',
    ], [
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'email.email' => 'Please enter a valid email address',
      'email.unique' => 'This email address is already registered',
      'password.min' => 'Password must be at least 8 characters',
      'password.confirmed' => 'Password confirmation does not match',
      'role.required' => 'Role is required',
      'status.required' => 'Status is required',
    ]);

    $user->update([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'role' => $validated['role'],
      'status' => $validated['status'],
    ]);

    // Update password only if provided
    if (!empty($validated['password'])) {
      $user->update(['password' => bcrypt($validated['password'])]);
    }
    $user->syncRoles([$validated['role']]);
    return redirect()->route('users.index')->with('success', 'User updated successfully.');
  }

  public function destroy(User $user)
  {
    if ($user->id === auth()->id()) {
      return redirect()->route('users.index')->with('error', 'You cannot delete your own account.');
    }

    $user->roles()->detach();    
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
  }
}
