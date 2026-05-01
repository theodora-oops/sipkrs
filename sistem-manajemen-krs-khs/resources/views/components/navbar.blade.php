<header class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <!-- TITLE -->
    <h1 class="text-xl font-semibold text-gray-800">
        {{ $title }}
    </h1>

    <div class="flex items-center gap-4">

        <!-- USER -->
        <div class="text-right hidden sm:block">
            <p class="font-medium text-gray-800">
                {{ auth()->user()->name }}
            </p>
            <p class="text-sm text-gray-500">
                {{ auth()->user()->email }}
            </p>
        </div>

        <!-- AVATAR -->
        <img src="https://i.pravatar.cc/40" 
             class="w-10 h-10 rounded-full border" 
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