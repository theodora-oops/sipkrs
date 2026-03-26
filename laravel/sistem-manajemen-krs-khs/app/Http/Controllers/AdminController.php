<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function matkul()
    {
        return view('admin.matkul');
    }
}
