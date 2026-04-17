<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        /* SIDEBAR */
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

        /* CONTENT */
        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 15px;
        }

        .box-container {
            display: flex;
            gap: 15px;
        }

        .box {
            flex: 1;
            background: #4facfe;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .box a {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 10px;
            background: white;
            color: #4facfe;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .box a:hover {
            background: #e6f3ff;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>MAHASISWA</h2>

    <a href="/mahasiswa/dashboard">Dashboard</a>
    <a href="/mahasiswa/krs">KRS</a>
    <a href="/mahasiswa/khs">KHS</a>
</div>

<!-- CONTENT -->
<div class="content">

    <h2>Dashboard Mahasiswa</h2>

    <div class="card">
        <h3>Selamat Datang 👋</h3>
        <p>Ini adalah sistem KRS & KHS mahasiswa.</p>
    </div>

    <div class="box-container">

        <div class="box">
            <h3>KRS</h3>
            <p>Ambil Mata Kuliah</p>
            <a href="/mahasiswa/krs">Masuk</a>
        </div>

        <div class="box">
            <h3>KHS</h3>
            <p>Lihat Nilai</p>
            <a href="/mahasiswa/khs">Masuk</a>
        </div>

    </div>

</div>

</body>
</html>