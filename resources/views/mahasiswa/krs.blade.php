<!DOCTYPE html>
<html>
<head>
    <title>KRS Mahasiswa</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #1e3a5f;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            text-decoration: none;
            padding-left: 20px;
        }

        .sidebar a:hover {
            background: #2c5282;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background: #4facfe;
            color: white;
        }

        button {
            padding: 6px 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>MAHASISWA</h2>

    <a href="/mahasiswa/krs">KRS</a>
    <a href="/mahasiswa/khs">KHS</a>
</div>

<!-- CONTENT -->
<div class="content">

    <h2>Form KRS (Kartu Rencana Studi)</h2>

    <div class="card">

        <table>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>Pemrograman Web</td>
                <td>3</td>
                <td><button>Ambil</button></td>
            </tr>

            <tr>
                <td>Basis Data</td>
                <td>3</td>
                <td><button>Ambil</button></td>
            </tr>

            <tr>
                <td>DRPL</td>
                <td>2</td>
                <td><button>Ambil</button></td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>