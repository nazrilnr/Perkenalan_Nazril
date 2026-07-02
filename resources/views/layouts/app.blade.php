<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}?v=1">    
    <title>@yield('title', 'Bull In Here')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-zinc-900 antialiased min-h-screen relative overflow-x-hidden selection:bg-blue-600 selection:text-white">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-zinc-100 w-full transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="text-2xl font-black tracking-tighter text-blue-600 hover:text-blue-700 font-mono transition duration-300">
                        BULL
                    </a>
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="{{ url('/') }}" class="text-sm font-medium text-zinc-600 hover:text-blue-600 transition duration-200">
                            Beranda
                        </a>
                        <a href="{{ url('/') }}#about" class="text-sm font-medium text-zinc-600 hover:text-blue-600 transition duration-200">
                            Tentang Saya
                        </a>
                        <a href="{{ url('/') }}#projects" class="text-sm font-medium text-zinc-600 hover:text-blue-600 transition duration-200">
                            Project
                        </a>
                    </div>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-zinc-600 hover:text-zinc-900 p-2 focus:outline-none" aria-label="Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-b border-zinc-200 bg-white/95 backdrop-blur-lg">
            <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-600 hover:text-blue-600 hover:bg-zinc-50 transition">
                    Beranda
                </a>
                <a href="{{ url('/') }}#projects" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-600 hover:text-blue-600 hover:bg-zinc-50 transition">
                    Project
                </a>
                <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-600 hover:text-blue-600 hover:bg-zinc-50 transition">
                    Kelola Project
                </a>
            </div>
        </div>
    </nav>

    <div class="fixed left-4 bottom-1/2 translate-y-1/2 z-50 flex flex-col gap-3.5 hidden sm:flex">
        <a href="https://linkedin.com/in/username-kamu" target="_blank" aria-label="LinkedIn"
           class="w-10 h-10 bg-white border border-zinc-200 rounded-xl flex items-center justify-center text-zinc-500 hover:text-blue-600 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300 transform hover:translate-x-1">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
        </a>

        <a href="https://www.instagram.com/bulkigus/" target="_blank" aria-label="Instagram"
           class="w-10 h-10 bg-white border border-zinc-200 rounded-xl flex items-center justify-center text-zinc-500 hover:text-pink-600 hover:border-pink-200 hover:shadow-lg hover:shadow-pink-500/10 transition-all duration-300 transform hover:translate-x-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
        </a>

        <a href="https://github.com/nazrilnr" target="_blank" aria-label="GitHub"
           class="w-10 h-10 bg-white border border-zinc-200 rounded-xl flex items-center justify-center text-zinc-500 hover:text-zinc-950 hover:border-zinc-400 hover:shadow-lg hover:shadow-zinc-500/10 transition-all duration-300 transform hover:translate-x-1">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/>
            </svg>
        </a>
    </div>

    <main class="relative z-10">
        @yield('content')
    </main>

    <footer class="relative z-10 border-t border-zinc-100 bg-zinc-50/50 backdrop-blur-md mt-24 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-sm text-zinc-500">
                    &copy; {{ date('Y') }} Muhammad Nazril. All rights reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <span class="text-xs text-zinc-400 flex items-center gap-1.5">
                        Built with Laravel 
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> 
                        Tailwind CSS v4
                    </span>
                </div>
            </div>
        </div>
    </footer>

    @if(session('success') || $errors->any())
    <div id="toast-notification" class="fixed bottom-6 right-6 z-50 transform translate-y-12 opacity-0 transition-all duration-500 max-w-sm w-full">
        @if(session('success'))
        <div class="p-4 rounded-xl border border-emerald-100 shadow-xl flex items-start gap-3 bg-white">
            <div class="p-1.5 rounded-lg bg-emerald-50 text-emerald-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-zinc-900 text-sm">Berhasil</h4>
                <p class="text-xs text-zinc-500 mt-0.5">{{ session('success') }}</p>
            </div>
            <button onclick="closeToast()" class="text-zinc-400 hover:text-zinc-600 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        @else
        <div class="p-4 rounded-xl border border-rose-100 shadow-xl flex items-start gap-3 bg-white">
            <div class="p-1.5 rounded-lg bg-rose-50 text-rose-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-zinc-900 text-sm">Gagal Menyimpan</h4>
                <p class="text-xs text-zinc-500 mt-0.5">{{ $errors->first() }}</p>
            </div>
            <button onclick="closeToast()" class="text-zinc-400 hover:text-zinc-600 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        @endif
    </div>
    @endif

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

        const toast = document.getElementById('toast-notification');
        if (toast) {
            setTimeout(() => {
                toast.classList.remove('translate-y-12', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
            }, 100);

            @if(session('success'))
                localStorage.setItem('portfolio_updated', Date.now());
            @endif

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

        window.addEventListener('storage', function(event) {
            if (event.key === 'portfolio_updated') {
                window.location.reload();
            }
        });

        window.addEventListener('pageshow', function(event) {
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                window.location.reload();
            }
        });
    </script>
</body>
</html>