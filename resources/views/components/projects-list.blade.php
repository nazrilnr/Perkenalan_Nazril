<section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10 bg-white border-t border-zinc-100">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900">
                Project
            </h2>
            <div class="h-1 w-12 bg-blue-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden hover:shadow-md transition-all duration-300 group flex flex-col h-full transform hover:-translate-y-1.5">
                    
                    <div class="relative overflow-hidden aspect-video border-b border-zinc-100 bg-zinc-50">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}"
                                 alt="{{ $project->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center relative">
                                <svg class="absolute inset-0 w-full h-full text-zinc-200/50" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                    <defs>
                                        <pattern id="grid-{{ $project->id }}" width="24" height="24" patternUnits="userSpaceOnUse">
                                            <path d="M 24 0 L 0 0 0 24" fill="none" stroke="currentColor" stroke-width="1"/>
                                        </pattern>
                                    </defs>
                                    <rect width="100%" height="100%" fill="url(#grid-{{ $project->id }})" />
                                </svg>
                                <svg class="w-12 h-12 text-zinc-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-zinc-900 group-hover:text-blue-600 transition duration-300">
                                {{ $project->title }}
                            </h3>
                            
                            <p class="text-zinc-600 text-sm mt-3 leading-relaxed">
                                {{ Str::limit($project->description, 120) }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-zinc-100">
                            <span class="text-xs font-semibold text-zinc-400 uppercase tracking-wider block mb-2">Teknologi</span>
                            
                            @php
                                $techs = array_map('trim', explode(',', $project->technology));
                            @endphp
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($techs as $tech)
                                    @if(!empty($tech))
                                        <span class="px-2 py-0.5 text-[10px] font-medium rounded bg-zinc-50 border border-zinc-200 text-blue-600">
                                            {{ $tech }}
                                        </span>
                                    @endif
                                @endforeach
                            </div>

                            @if($project->github)
                                <div class="mt-4 flex justify-end">
                                    <a href="{{ $project->github }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs text-zinc-500 hover:text-blue-600 transition font-medium">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                                        GitHub Repository
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full border border-dashed border-zinc-200 rounded-2xl p-12 text-center">
                    <svg class="w-12 h-12 text-zinc-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    <h3 class="text-base font-semibold text-zinc-700">Belum ada project</h3>
                    <p class="text-xs text-zinc-400 mt-1">Tambahkan project baru dari menu pengelola project.</p>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-16">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-zinc-50 border border-zinc-200 hover:border-zinc-300 hover:bg-zinc-100 text-zinc-700 font-medium transition duration-300">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Kelola Project Anda
            </a>
        </div>
    </div>
</section>