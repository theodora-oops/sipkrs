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
        <aside class="w-64 bg-slate-800 text-white min-h-screen p-5">
            <h2 class="text-2xl font-bold mb-8 text-center">SIP.KRS</h2>

            <nav class="space-y-2">
                <a href="/dosen/dashboard"
                    class="block px-4 py-2 rounded {{ request()->is('dosen/dashboard') ? 'bg-slate-700' : 'hover:bg-slate-700' }}">
                    Dashboard
                </a>

                <a href="/dosen/kelas"
                    class="block px-4 py-2 rounded {{ request()->is('dosen/kelas*') ? 'bg-slate-700' : 'hover:bg-slate-700' }}">
                    Kelas Diampu
                </a>

                <a href="#" class="block px-4 py-2 rounded hover:bg-slate-700">
                    Input Nilai
                </a>
            </nav>
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
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                            Logout
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
