<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Matkul;
use App\Models\Semester;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahMahasiswa = User::where('role', 'mahasiswa')->count();
        $jumlahDosen = User::where('role', 'dosen')->count();
        $jumlahMatkul = Matkul::count();
        
        $semesterAktif = Semester::where('is_active', 1)->first();
        
        return view('admin.dashboard', compact(
            'jumlahMahasiswa',
            'jumlahDosen',
            'jumlahMatkul',
            'semesterAktif'    
        ));
    }

    public function dosen()
    {
        return view('admin.dosen');
    }

    public function mahasiswa()
    {
        return view('admin.mahasiswa');
    }

    public function matkul()
    {
        return view('admin.matkul');
    }
    
     public function semester()
    {
        return view('admin.semester');
    }
}