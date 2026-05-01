<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
        public function dashboard()
    {
        return view('pages.mahasiswa.dashboard');
    }

    public function krs()
    {
        return view('pages.mahasiswa.krs');
    }

    public function khs()
    {
        return view('pages.mahasiswa.khs');
    }
}
