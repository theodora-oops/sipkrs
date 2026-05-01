@extends('layouts.list')

@section('title', 'Home')

@section('content')

<div class="text-center">
    <h1 class="text-3xl font-bold mb-4">Selamat Datang</h1>

    <p class="text-gray-700 mb-2">
        Halo <span class="font-semibold">{{ $nama }}</span> 👋
    </p>

    <p class="text-gray-600 mb-6">
        Anda terdaftar sebagai <span class="font-semibold">{{ $pekerjaan }}</span>
    </p>

    <a href="/pages/contact" 
       class="bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600">
        Hubungi Kami
    </a>
</div>

@endsection