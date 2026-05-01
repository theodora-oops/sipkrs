@extends('layouts.app')

@section('title', 'Kelola Semester')

@section('content')

<!-- SUCCESS -->
@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<!-- BUTTON TAMBAH -->
<x-button class="bg-blue-500 mb-6" onclick="openModal()">
    + Tambah Semester
</x-button>

<!-- MODAL TAMBAH -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white w-full max-w-md p-6 rounded-xl shadow-lg relative">

        <button onclick="closeModal()" class="absolute top-3 right-3">✕</button>

        <h3 class="text-xl font-bold mb-4">Tambah Semester</h3>

        <form method="POST" action="{{ route('semester.store') }}" class="space-y-3">
            @csrf

            <input type="text" name="tahun_ajaran" placeholder="2025/2026" class="border p-2 rounded w-full" required>

            <select name="tipe" class="border p-2 rounded w-full" required>
                <option value="">-- Pilih Semester --</option>
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>

            <button class="bg-blue-500 text-white py-2 rounded w-full">
                Simpan
            </button>
        </form>

    </div>
</div>

<!-- MODAL EDIT -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white w-full max-w-md p-6 rounded-xl shadow-lg relative">

        <button onclick="closeEditModal()" class="absolute top-3 right-3">✕</button>

        <h3 class="text-xl font-bold mb-4">Edit Semester</h3>

        <form method="POST" id="editForm" class="space-y-3">
            @csrf
            @method('PUT')

            <input type="text" name="tahun_ajaran" id="edit_tahun" class="border p-2 rounded w-full" required>

            <select name="tipe" id="edit_tipe" class="border p-2 rounded w-full">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>

            <button class="bg-yellow-500 text-white py-2 rounded w-full">
                Update
            </button>
        </form>

    </div>
</div>

<!-- SCRIPT -->
<script>
    // TAMBAH MODAL
    function openModal() {
        const modal = document.getElementById('modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // EDIT MODAL
    function openEditModal(el) {
        const id = el.dataset.id;
        const tahun = el.dataset.tahun;
        const tipe = el.dataset.tipe;

        const modal = document.getElementById('editModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        document.getElementById('edit_tahun').value = tahun;
        document.getElementById('edit_tipe').value = tipe;

        document.getElementById('editForm').action = `/semester/${id}`;
    }

    function closeEditModal() {
        const modal = document.getElementById('editModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

</script>

<!-- LIST -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

    @foreach($semesters as $s)
    <div class="bg-white p-5 rounded-xl shadow {{ $s->is_active ? 'border-2 border-green-500' : '' }}">

        <div class="flex justify-between mb-3">
            <div>
                <h3 class="font-bold">{{ $s->tahun_ajaran }}</h3>
                <p class="text-sm capitalize">Semester {{ $s->tipe }}</p>
            </div>

            <span class="text-sm px-2 py-1 rounded 
                {{ $s->is_active ? 'bg-green-500 text-white' : 'bg-gray-400 text-white' }}">
                {{ $s->is_active ? 'Aktif' : 'Nonaktif' }}
            </span>
        </div>

        <div class="flex gap-2">

            <!-- AKTIF -->
            @if(!$s->is_active)
            <form action="{{ route('semester.activate', $s->id) }}" method="POST" class="w-full">
                @csrf
                <x-button class="bg-green-500 w-full">
                    Aktifkan
                </x-button>
            </form>
            @else
            <button disabled class="w-full bg-gray-300 text-white py-2 rounded">
                Sedang Aktif
            </button>
            @endif

            <!-- EDIT -->
            <x-button class="bg-yellow-500 w-full" data-id="{{ $s->id }}" data-tahun="{{ $s->tahun_ajaran }}"
                data-tipe="{{ $s->tipe }}" onclick="openEditModal(this)">
                Edit
            </x-button>

        </div>

    </div>
    @endforeach

</div>

@endsection
