<section id="about" class="py-24 px-4 sm:px-6 lg:px-8 bg-zinc-50/50 border-t border-b border-zinc-100">
    <div class="max-w-5xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-7 space-y-6 text-left relative z-10 order-2 lg:order-1">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-xs font-semibold tracking-wider text-blue-600">
                <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                Tentang Saya
            </div>

            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight text-zinc-900">
                Halo, saya <br class="hidden sm:inline">
                <span class="text-blue-600">
                    Muhammad Nazril
                </span>
            </h1>

            <p class="text-zinc-600 text-base sm:text-lg leading-relaxed">
            Seorang pengembang web yang berfokus pada pembuatan aplikasi modern dan ramah pengguna. 
            Saya senang menciptakan solusi yang rapi, efisien, serta mudah dikembangkan (scalable) 
            demi memberikan pengalaman digital yang luar biasa. Saya selalu antusias mempelajari 
            teknologi baru dan terus mengasah keterampilan untuk siap bersaing di industri yang terus 
            bergerak maju </p>

            <div class="flex flex-wrap gap-4 pt-4">
                <a href="#projects" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-medium shadow-md hover:shadow-blue-500/10 transition duration-300 transform hover:-translate-y-0.5 flex items-center gap-2">
                    Lihat Project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-6l-7 7-7-7"></path>
                    </svg>
                </a>
                <a href="https://github.com/nazrilnr" target="_blank" class="px-6 py-3 rounded-xl bg-white border border-zinc-200 hover:border-zinc-300 hover:bg-zinc-50 text-zinc-700 font-medium transition duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                    GitHub
                </a>
            </div>
        </div>

        <div class="lg:col-span-5 order-1 lg:order-2">
            <div class="w-full aspect-video lg:aspect-[4/3] rounded-2xl overflow-hidden shadow-md border border-zinc-200 bg-zinc-100">
                <img src="{{ asset('storage/image/profile.jpg') }}" 
                     alt="Muhammad Nazril" 
                     class="w-full h-full object-cover object-[center50%]"> 
                     </div>
        </div>

    </div>
</section>