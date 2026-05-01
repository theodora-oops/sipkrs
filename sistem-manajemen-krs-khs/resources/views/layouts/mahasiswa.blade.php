<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SIP.KRS - Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-blue-900 text-gray-200 min-h-screen p-5 flex flex-col">

        <!-- LOGO -->
        <h2 class="text-2xl font-bold mb-10 text-center text-white tracking-wide">
            SIP.KRS
        </h2>

        <!-- MENU -->
        <nav class="space-y-2 flex-1">

            <a href="/mahasiswa/dashboard"
                class="block px-4 py-2 rounded-lg transition
                {{ request()->is('mahasiswa/dashboard') ? 'bg-blue-700 text-white' : 'hover:bg-blue-800' }}">
                Dashboard
            </a>

            <a href="/mahasiswa/krs"
                class="block px-4 py-2 rounded-lg transition
                {{ request()->is('mahasiswa/krs*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-800' }}">
                Isi KRS
            </a>

            <a href="/mahasiswa/riwayat-krs"
                class="block px-4 py-2 rounded-lg transition
                {{ request()->is('mahasiswa/riwayat-krs*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-800' }}">
                Riwayat KRS
            </a>

            <a href="/mahasiswa/khs"
                class="block px-4 py-2 rounded-lg transition
                {{ request()->is('mahasiswa/khs*') ? 'bg-blue-700 text-white' : 'hover:bg-blue-800' }}">
                KHS
            </a>

        </nav>

        <!-- FOOTER -->
        <div class="text-sm text-gray-300 text-center mt-6">
            © {{ date('Y') }} SIP.KRS
        </div>

    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- NAVBAR -->
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">

            <!-- TITLE -->
            <h1 class="text-xl font-semibold text-gray-800">
                @yield('title')
            </h1>

            <div class="flex items-center gap-4">

                <!-- USER INFO -->
                <div class="text-right hidden sm:block">
                    <p class="font-medium text-gray-800">
                        {{ auth()->user()->name }}
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ auth()->user()->email }}
                    </p>
                </div>

                <!-- AVATAR -->
                <img src="https://i.pravatar.cc/40?u={{ auth()->user()->id }}" class="w-10 h-10 rounded-full border"
                        alt="profile">

                <!-- LOGOUT -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="p-2 rounded-full hover:bg-red-100 transition">

                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1"/>
                        </svg>

                    </button>
                </form>

            </div>

        </header>

        <!-- CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>

    </div>

</div>

</body>

</html>