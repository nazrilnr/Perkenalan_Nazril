<section class="min-h-[70vh] flex items-center justify-center relative py-24 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
    
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-60"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10 space-y-6 sm:space-y-8">

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black tracking-tight text-zinc-900 leading-none uppercase flex flex-col sm:flex-row items-center justify-center gap-3">
            <span class="inline-flex flex-col h-[1.2em] overflow-hidden text-blue-600 relative">
                <span class="animate-[roll_4s_infinite] flex flex-col transition-all">
                    <span class="h-[1.2em] flex items-center justify-center">Bull</span>
                    <span class="h-[1.2em] flex items-center justify-center text-zinc-900">Nazril</span>
                    <span class="h-[1.2em] flex items-center justify-center">Bull</span>
                </span>
            </span>
            <span>In Here</span>
        </h1>

        <h2 class="text-xl sm:text-2xl font-bold text-zinc-700 tracking-wide uppercase">
            Web Developer
        </h2>

        <p class="text-zinc-600 text-base sm:text-lg lg:text-xl max-w-2xl mx-auto leading-relaxed">
            Mengembangkan aplikasi web modern dan skalabel dengan fokus pada desain yang rapi serta pengalaman pengguna yang optimal.
        </p>

        <div class="pt-4">
            <a href="#projects" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-md hover:shadow-blue-500/20 transition duration-300 transform hover:-translate-y-0.5 group">
                Lihat Project Saya
                <svg class="w-4 h-4 transform group-hover:translate-y-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-6l-7 7-7-7"></path>
                </svg>
            </a>
        </div>

    </div>
</section>

<style>
@keyframes roll {
    0%, 35% {
        transform: translateY(0);
    }
    50%, 85% {
        transform: translateY(-1.2em);
    }
    100% {
        transform: translateY(-2.4em);
    }
}
</style>