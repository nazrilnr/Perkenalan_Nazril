@extends('layouts.app')

@section('title', 'Tambah Project | Nazril')

@section('content')
<div class="py-12 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
    
    <!-- Header with Back Button -->
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center p-2.5 rounded-xl bg-zinc-900 border border-zinc-800 hover:border-zinc-700 text-zinc-400 hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
        </a>
        <div>
            <h1 class="text-xl sm:text-2xl font-extrabold text-zinc-100">
                Tambah Project Baru
            </h1>
            <p class="text-zinc-400 text-xs sm:text-sm mt-0.5">
                Isi detail informasi untuk menambahkan hasil karya baru ke portfolio Anda.
            </p>
        </div>
    </div>

    <!-- Form Section -->
    <div class="glass-panel p-6 sm:p-8 rounded-2xl shadow-2xl">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Title -->
            <div class="space-y-2">
                <label for="title" class="block text-sm font-semibold text-zinc-200">Judul Project</label>
                <input type="text" name="title" id="title" required placeholder="Contoh: Website E-Commerce Laravel"
                       class="w-full px-4 py-3 rounded-xl bg-zinc-900/60 border border-zinc-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 text-zinc-100 placeholder-zinc-600 transition duration-200 outline-none @error('title') border-rose-500/50 @enderror"
                       value="{{ old('title') }}">
                @error('title')
                    <span class="text-xs text-rose-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div class="space-y-2">
                <label for="description" class="block text-sm font-semibold text-zinc-200">Deskripsi</label>
                <textarea name="description" id="description" required placeholder="Ceritakan secara singkat mengenai project ini, proses pembuatan, dan fitur utamanya..."
                          class="w-full px-4 py-3 rounded-xl bg-zinc-900/60 border border-zinc-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 text-zinc-100 placeholder-zinc-600 transition duration-200 outline-none h-36 resize-y @error('description') border-rose-500/50 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-xs text-rose-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- Technology -->
            <div class="space-y-2">
                <label for="technology" class="block text-sm font-semibold text-zinc-200">Teknologi</label>
                <input type="text" name="technology" id="technology" required placeholder="Contoh: Laravel, TailwindCSS, Livewire (pisahkan dengan koma)"
                       class="w-full px-4 py-3 rounded-xl bg-zinc-900/60 border border-zinc-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 text-zinc-100 placeholder-zinc-600 transition duration-200 outline-none @error('technology') border-rose-500/50 @enderror"
                       value="{{ old('technology') }}">
                @error('technology')
                    <span class="text-xs text-rose-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- GitHub link -->
            <div class="space-y-2">
                <label for="github" class="block text-sm font-semibold text-zinc-200">Link GitHub (Opsional)</label>
                <input type="url" name="github" id="github" placeholder="Contoh: https://github.com/username/project-repo"
                       class="w-full px-4 py-3 rounded-xl bg-zinc-900/60 border border-zinc-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 text-zinc-100 placeholder-zinc-600 transition duration-200 outline-none @error('github') border-rose-500/50 @enderror"
                       value="{{ old('github') }}">
                @error('github')
                    <span class="text-xs text-rose-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image upload -->
            <div class="space-y-2">
                <label for="image" class="block text-sm font-semibold text-zinc-200">Gambar Cover Project (Opsional)</label>
                <div class="relative w-full">
                    <input type="file" name="image" id="image" accept="image/*"
                           class="w-full px-4 py-3 rounded-xl bg-zinc-900/60 border border-zinc-800 focus:border-indigo-500 text-sm text-zinc-400 file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-zinc-800 file:text-zinc-200 file:hover:bg-zinc-700 transition cursor-pointer @error('image') border-rose-500/50 @enderror">
                </div>
                @error('image')
                    <span class="text-xs text-rose-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="pt-4 border-t border-zinc-900">
                <button type="submit" class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold shadow-lg hover:shadow-indigo-500/20 transition duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                    </svg>
                    Simpan Project
                </button>
            </div>

        </form>
    </div>
</div>
@endsection