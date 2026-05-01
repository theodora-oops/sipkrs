<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP.KRS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-slate-900 text-gray-200 p-5 flex flex-col">

        <!-- LOGO -->
        <h2 class="text-2xl font-bold mb-10 text-center tracking-wide text-white">
            SIP.KRS
        </h2>

        <!-- MENU -->
        <nav class="space-y-2 flex-1">

            <!-- Dashboard -->
            <a href="/admin/dashboard"
                class="flex items-center gap-3 px-4 py-2 rounded-lg transition
                {{ request()->is('admin/dashboard') ? 'bg-slate-700 text-white' : 'hover:bg-slate-800' }}">

                <span>Dashboard</span>
            </a>

            <!-- Pengguna -->
            <a href="/admin/pengguna"
                class="flex items-center gap-3 px-4 py-2 rounded-lg transition
                {{ request()->is('admin/pengguna*') ? 'bg-slate-700 text-white' : 'hover:bg-slate-800' }}">
                <span>Kelola Pengguna</span>
            </a>

            <!-- Matkul -->
            <a href="/admin/matkul"
                class="flex items-center gap-3 px-4 py-2 rounded-lg transition
                {{ request()->is('admin/matkul*') ? 'bg-slate-700 text-white' : 'hover:bg-slate-800' }}">
                <span>Kelola Matkul</span>
            </a>

            <!-- Semester -->
            <a href="/admin/semester"
                class="flex items-center gap-3 px-4 py-2 rounded-lg transition
                {{ request()->is('admin/semester*') ? 'bg-slate-700 text-white' : 'hover:bg-slate-800' }}">
                <span>Kelola Semester</span>
            </a>

        </nav>

        <!-- FOOTER -->
        <div class="text-sm text-gray-400 text-center mt-6">
            © {{ date('Y') }} SIP.KRS
        </div>

    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- NAVBAR COMPONENT -->
        <x-navbar :title="View::yieldContent('title')" />

        <!-- CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>