@extends('layouts.dosen')

@section('title', 'Kelas Diampu')

@section('content')

<!-- FILTER -->
<div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 gap-4">

    <div class="flex gap-3">
        
        <select class="border rounded-lg px-3 py-2 text-sm">
            <option>Genap 2024/2025</option>
            <option>Ganjil 2024/2025</option>
        </select>

        <select class="border rounded-lg px-3 py-2 text-sm">
            <option>2024/2025</option>
            <option>2023/2024</option>
        </select>

    </div>

</div>

<!-- GRID CARD -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($kelas as $k)
<div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-5">

    <!-- HEADER -->
    <div class="flex justify-between items-start mb-4">

        <div class="flex items-center gap-3">

            <!-- ICON -->
            <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                📘
            </div>

            <div>
                <h3 class="font-bold text-gray-800">
                    {{ $k->kode }}
                </h3>
                <p class="text-sm text-gray-600">
                    {{ $k->nama }}
                </p>
            </div>

        </div>

        <!-- STATUS -->
        <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full">
            Aktif
        </span>

    </div>

    <!-- INFO -->
    <div class="text-sm text-gray-600 mb-4 space-y-1">
        <p>Semester {{ $k->semester }} | Kelas {{ $k->kelas }}</p>
        <p class="flex items-center gap-1">
            👥 {{ $k->jumlah_mahasiswa }} Mahasiswa
        </p>
    </div>

    <!-- ACTION -->
    <div class="flex gap-2">

        <a href="{{ route('dosen.kelas.detail', $k->id) }}"
            class="w-full bg-blue-100 text-blue-600 py-2 rounded-lg text-sm hover:bg-blue-200 transition text-center">
            👁 Detail
        </a>

        <a href="{{ route('dosen.nilai', $k->id) }}"
            class="w-full bg-green-100 text-green-600 py-2 rounded-lg text-sm hover:bg-green-200 transition text-center">
            ✏ Input Nilai
        </a>

    </div>

</div>
@endforeach

</div>

<!-- INFO BOX -->
<div class="mt-6 bg-blue-50 border border-blue-200 text-blue-700 p-4 rounded-lg text-sm">
    Klik <b>Detail</b> untuk melihat daftar mahasiswa.  
    Klik <b>Input Nilai</b> untuk menginput nilai mahasiswa.
</div>

@endsection