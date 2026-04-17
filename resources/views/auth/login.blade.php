<!DOCTYPE html>
<html>
<head>
    <title>Login SIPKRS</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .login-card h2 {
            margin-bottom: 5px;
        }

        .login-card p {
            font-size: 12px;
            color: gray;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #4facfe;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0077ff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

<div class="login-card">

    <h2>LOGIN SIPKRS</h2>
    <p>Silakan masuk ke akun Anda</p>

    <form method="POST" action="/login" id="loginForm">
        @csrf

        <input type="text" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <select name="role">
            <option value="admin">Admin</option>
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
        </select>

        <button type="submit" id="loginBtn">Login</button>
    </form>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("loginForm");
        const button = document.getElementById("loginBtn");

        form.addEventListener("submit", function () {
            button.innerText = "Logging in...";
            button.disabled = true;
        });
    });
</script>

</body>
</html>