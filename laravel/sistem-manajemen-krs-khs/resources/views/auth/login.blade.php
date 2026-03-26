<h1>LOGIN PAGE</h1>

<!DOCTYPE html>
<html>
<head>
    <title>Login SIPKRS</title>
</head>
<body>

<h2>Login SIPKRS</h2>

<form method="POST" action="/login">
    @csrf

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <label>Login sebagai:</label><br>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
    </select><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>