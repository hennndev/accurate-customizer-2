<?php

use App\Http\Controllers\DataMigrateController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemLogsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return redirect()->route('login');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
  Route::get('/redirect-after-login', function () {
    $user = Auth::user();

    if ($user->hasRole(['Super Admin', 'Admin'])) {
      return redirect()->route('modules.index');
    }
    return redirect('/login');
  })->name('login.redirect');

  Route::get('/profile', [ProfileController::class, 'edit'])->name(
    'profile.edit',
  );
  Route::patch('/profile', [ProfileController::class, 'update'])->name(
    'profile.update',
  );
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
    'profile.destroy',
  );


  Route::controller(ModulesController::class)->prefix('modules')->group(function () {
    // tampilan modules
    Route::get('/', 'index')->name('modules.index');
    // capture module data
    // switch database connection
  });
  Route::controller(DataMigrateController::class)->prefix('migrate')->group(function () {
    // tampilan migrate
    Route::get('/', 'index')->name('migrate.index');
  });
  Route::controller(SystemLogsController::class)->prefix('system-logs')->group(function () {
    // tampilan system logs
    Route::get('/', 'index')->name('system-logs.index');  
  });
  Route::controller(UsersController::class)->middleware('can:manage_users')->prefix('users')->group(function () {
    Route::get('/', 'index')->name('users.index');
    Route::post('/', 'store')->name('users.store');
    Route::put('/{user}', 'update')->name('users.update');
    Route::delete('/{user}', 'destroy')->name('users.destroy');
  });
});
