<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
        public function dashboard()
    {
        return view('dosen.dashboard');
    }

    public function inputNilai()
    {
        return view('dosen.input_nilai');
    }
}
