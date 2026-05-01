@extends('layouts.list')

@section('title', 'Contact')

@section('content')

<h1 class="text-2xl font-bold mb-4">Contact</h1>

<div class="bg-gray-50 p-5 rounded shadow max-w-md">
    
    <p class="mb-2">
        <span class="font-semibold">Email:</span> 
        admin@kampus.ac.id
    </p>

    <p class="mb-4">
        <span class="font-semibold">Telepon:</span> 
        08123456789
    </p>

    <a href="/pages/home" 
       class="text-blue-500 hover:underline">
        ← Kembali ke Home
    </a>

</div>

@endsection