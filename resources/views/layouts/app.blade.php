<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Muhammad Nazril | Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-zinc-100 antialiased min-h-screen relative overflow-x-hidden selection:bg-indigo-600 selection:text-white">

    <!-- Ambient Background Glows -->
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-indigo-600 glow-blob animate-pulse-slow"></div>
    <div class="absolute top-[40%] right-[-10%] w-[600px] h-[600px] bg-purple-600 glow-blob animate-pulse-slow" style="animation-delay: -3s;"></div>
    <div class="absolute bottom-[-10%] left-[20%] w-[500px] h-[500px] bg-fuchsia-600 glow-blob animate-pulse-slow" style="animation-delay: -6s;"></div>

    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 glass-nav w-full transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Brand / Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="text-xl font-bold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-violet-400 hover:from-indigo-300 hover:to-violet-300 transition duration-300">
                        Nazril<span class="text-indigo-500">.</span>dev
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="{{ url('/') }}" class="text-sm font-medium text-zinc-300 hover:text-white transition duration-200">
                            Beranda
                        </a>
                        <a href="{{ url('/') }}#projects" class="text-sm font-medium text-zinc-300 hover:text-white transition duration-200">
                            Project
                        </a>
                        <a href="{{ route('projects.index') }}" class="text-sm font-medium text-zinc-300 hover:text-white transition duration-200 flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-zinc-700">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Kelola Project
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-zinc-400 hover:text-white p-2 focus:outline-none" aria-label="Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-b border-zinc-900 bg-zinc-950/95 backdrop-blur-lg">
            <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-300 hover:text-white hover:bg-zinc-900 transition">
                    Beranda
                </a>
                <a href="{{ url('/') }}#projects" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-300 hover:text-white hover:bg-zinc-900 transition">
                    Project
                </a>
                <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-300 hover:text-white hover:bg-zinc-900 transition">
                    Kelola Project
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="relative z-10 fade-in">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 border-t border-zinc-900 bg-zinc-950/60 backdrop-blur-md mt-24 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-sm text-zinc-500">
                    &copy; {{ date('Y') }} Muhammad Nazril. All rights reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <span class="text-xs text-zinc-600 flex items-center gap-1.5">
                        Built with Laravel 
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span> 
                        Tailwind CSS v4
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Success & Error Alert Floating Toast -->
    @if(session('success') || $errors->any())
    <div id="toast-notification" class="fixed bottom-6 right-6 z-50 transform translate-y-12 opacity-0 transition-all duration-500 max-w-sm w-full">
        @if(session('success'))
        <div class="p-4 rounded-xl glass-panel border border-emerald-500/20 shadow-2xl flex items-start gap-3 bg-zinc-900/90">
            <div class="p-1.5 rounded-lg bg-emerald-500/10 text-emerald-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-zinc-100 text-sm">Berhasil</h4>
                <p class="text-xs text-zinc-400 mt-0.5">{{ session('success') }}</p>
            </div>
            <button onclick="closeToast()" class="text-zinc-500 hover:text-zinc-300 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        @else
        <div class="p-4 rounded-xl glass-panel border border-rose-500/20 shadow-2xl flex items-start gap-3 bg-zinc-900/90">
            <div class="p-1.5 rounded-lg bg-rose-500/10 text-rose-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-zinc-100 text-sm">Gagal Menyimpan</h4>
                <p class="text-xs text-zinc-400 mt-0.5">{{ $errors->first() }}</p>
            </div>
            <button onclick="closeToast()" class="text-zinc-500 hover:text-zinc-300 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        @endif
    </div>
    @endif

    <script>
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

        // Float notification script
        const toast = document.getElementById('toast-notification');
        if (toast) {
            setTimeout(() => {
                toast.classList.remove('translate-y-12', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
            }, 100);

            // Trigger localStorage change to notify other tabs to reload
            @if(session('success'))
                localStorage.setItem('portfolio_updated', Date.now());
            @endif

            // Hide automatically after 5 seconds
            setTimeout(() => {
                closeToast();
            }, 5000);
        }

        function closeToast() {
            if (toast) {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-12', 'opacity-0');
                setTimeout(() => {
                    toast.remove();
                }, 500);
            }
        }

        // Cross-tab auto reload when database actions happen
        window.addEventListener('storage', function(event) {
            if (event.key === 'portfolio_updated') {
                window.location.reload();
            }
        });

        // Force reload page on browser back-button navigation to bypass cache
        window.addEventListener('pageshow', function(event) {
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                window.location.reload();
            }
        });
    </script>
</body>
</html>