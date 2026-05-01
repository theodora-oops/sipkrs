@extends('layouts.list')

@section('title', 'About')

@section('content')
<h1 class="text-2xl font-bold mb-4">About Us</h1>

<p class="mb-4 text-gray-700">
    SIP.KRS adalah aplikasi berbasis web yang dirancang untuk membantu
    mahasiswa dalam mengelola rencana studi (KRS) dan melihat hasil studi (KHS) secara
    mudah, cepat, dan efisien.
</p>

<div class="grid md:grid-cols-2 gap-6 mt-6">

    <div class="p-4 border rounded-lg shadow-sm">
        <h2 class="font-semibold text-lg mb-2">🎯 Tujuan</h2>
        <p class="text-gray-600">
            Mempermudah proses pengisian KRS dan akses informasi akademik secara digital.
        </p>
    </div>

    <div class="p-4 border rounded-lg shadow-sm">
        <h2 class="font-semibold text-lg mb-2">⚙️ Fitur</h2>
        <ul class="list-disc ml-5 text-gray-600">
            <li>Pengisian KRS online</li>
            <li>Melihat KHS</li>
            <li>Manajemen data mahasiswa & dosen</li>
        </ul>
    </div>

</div>
@endsection