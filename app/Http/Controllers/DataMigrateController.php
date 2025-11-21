<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMigrateController extends Controller
{
    public function index()
    {
        return view('migrate.index');
    }
}
