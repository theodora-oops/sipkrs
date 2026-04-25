@extends('layouts.dosen')

@section('title', 'Kelas Diampu')

@section('content')

<h2 class="text-xl font-bold mb-4">
    Kelas yang Diampu 
    ({{ $semesterAktif->nama ?? '-' }})
</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    @forelse($matkuls as $matkul)
        <a href="/dosen/kelas/{{ $matkul->id }}"
           class="bg-white p-5 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">

            <h3 class="font-semibold text-lg text-gray-800">
                {{ $matkul->nama_mk }}
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                Kode: {{ $matkul->kode_mk }}
            </p>

            <p class="text-sm text-gray-400">
                Semester {{ $matkul->semester }}
            </p>

        </a>
    @empty
        <div class="bg-white p-5 rounded-xl shadow text-gray-500">
            Tidak ada kelas di semester ini
        </div>
    @endforelse

</div>

@endsection