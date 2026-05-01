<h2 class="text-xl font-bold mb-4">
    {{ $matkul->nama_matkul }}
</h2>

<table class="w-full bg-white rounded-xl shadow">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">No</th>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">NIM</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $index => $krs)
        <tr class="border-t">
            <td class="p-3">{{ $index + 1 }}</td>
            <td class="p-3">{{ $krs->mahasiswa->name }}</td>
            <td class="p-3">{{ $krs->mahasiswa->nim ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>