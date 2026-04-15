<!DOCTYPE html>
<html>
<head>
    <title>Kelola Matkul</title>

    <style>
        body { font-family: Arial; background:#f4f6f9; margin:0; }
        .content { padding:20px; }

        .card {
            background:white;
            padding:20px;
            border-radius:10px;
        }

        table {
            width:100%;
            border-collapse: collapse;
            margin-top:15px;
        }

        th, td {
            border:1px solid #ddd;
            padding:10px;
        }

        th {
            background:#4facfe;
            color:white;
        }

        .btn { padding:6px 10px; border:none; border-radius:5px; }
        .edit { background:orange; color:white; }
        .delete { background:red; color:white; }
    </style>
</head>

<body>

<div class="content">

    <h2>Kelola Mata Kuliah</h2>

    <div class="card">

        <button style="background:#28a745;color:white;padding:8px;border:none;border-radius:5px;">
            + Tambah Matkul
        </button>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Pemrograman Web</td>
                <td>3</td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete">Hapus</button>
                </td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>