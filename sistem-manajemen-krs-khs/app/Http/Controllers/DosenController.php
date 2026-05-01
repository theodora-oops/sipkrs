<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\Semester;
use App\Models\Krs;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function dashboard()
    {
        return view('pages.dosen.dashboard');
    }

    //  INI UNTUK LIST KELAS DOSEN
    public function kelas()
    {
        $user = Auth::user();

        $semesterAktif = Semester::where('is_active', 1)->first();

        $kelas = Matkul::where('dosen_id', $user->id)
            ->where('semester', $semesterAktif->id ?? null)
            ->get();

        return view('pages.dosen.kelas', compact('kelas', 'semesterAktif'));
    }

    //  INI UNTUK LIST MAHASISWA
    public function detailKelas($id)
    {
        $matkul = Matkul::findOrFail($id);

        $mahasiswas = Krs::where('matkul_id', $id)
            ->with('mahasiswa')
            ->get();

        return view('pages.dosen.detail_kelas', compact('matkul', 'mahasiswas'));
    }

    public function inputNilai()
    {
        return view('pages.dosen.input_nilai');
    }
}