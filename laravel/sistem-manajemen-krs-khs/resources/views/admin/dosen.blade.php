<!DOCTYPE html>
<html>
<head>
    <title>Kelola Dosen</title>

    <style>
        body { font-family: Arial; background:#f4f6f9; margin:0; }

        .content {
            padding: 20px;
        }

        .card {
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }

        table {
            width:100%;
            border-collapse: collapse;
            margin-top:15px;
        }

        th, td {
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }

        th {
            background:#4facfe;
            color:white;
        }

        .btn {
            padding:6px 10px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        .edit { background:orange; color:white; }
        .delete { background:red; color:white; }
    </style>
</head>

<body>

<div class="content">

    <h2>Kelola Dosen</h2>

    <div class="card">

        <button class="btn" style="background:#28a745;color:white;">
            + Tambah Dosen
        </button>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Dosen A</td>
                <td>dosenA@mail.com</td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete">Hapus</button>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Dosen B</td>
                <td>dosenB@mail.com</td>
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