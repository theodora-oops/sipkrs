<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen - SIP.KRS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-800 text-white min-h-screen p-5 flex flex-col">

            <!-- LOGO -->
            <h2 class="text-2xl font-bold mb-8 text-center">SIP.KRS</h2>

            <!-- MENU -->
            <nav class="space-y-2 flex-1">
                <a href="/dosen/dashboard"
                    class="block px-4 py-2 rounded {{ request()->is('dosen/dashboard') ? 'bg-slate-700' : 'hover:bg-slate-700' }}">
                    Dashboard
                </a>

                <a href="/dosen/kelas"
                    class="block px-4 py-2 rounded {{ request()->is('dosen/kelas*') ? 'bg-slate-700' : 'hover:bg-slate-700' }}">
                    Kelas Diampu
                </a>

                <a href="/dosen/nilai"
                    class="block px-4 py-2 rounded {{ request()->is('dosen/nilai*') ? 'bg-slate-700' : 'hover:bg-slate-700' }}">
                    Input Nilai
                </a>
            </nav>

            <!-- FOOTER -->
            <div class="text-sm text-gray-400 text-center">
                © {{ date('Y') }} SIP.KRS
            </div>

        </aside>

        <!-- MAIN -->
        <div class="flex-1">

            <!-- NAVBAR -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">@yield('title')</h1>

                <div class="flex items-center gap-4">

                    <div class="text-right">
                        <p class="font-medium">{{ auth()->user()->name }}</p>
                        <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
                    </div>

                    <!--  PROFIL -->
                    <img src="https://i.pravatar.cc/40?u={{ auth()->user()->id }}" class="w-10 h-10 rounded-full border"
                        alt="profile">

                    <!-- LOGOUT -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="p-2 rounded-full hover:bg-red-100 transition">

                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1" />
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
