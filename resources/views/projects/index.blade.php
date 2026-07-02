@extends('layouts.app')

@section('title', 'Kelola Project | Nazril')

@section('content')
<div class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto bg-white">
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10">
        <div>
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-zinc-900">
                Kelola Project
            </h1>
            <p class="text-zinc-500 text-xs sm:text-sm mt-1">
                Dashboard admin untuk menambah, mengedit, atau menghapus project portfolio Anda.
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white border border-zinc-200 hover:border-zinc-300 text-zinc-700 hover:text-zinc-900 text-sm font-semibold transition duration-300 transform hover:-translate-y-0.5 shadow-sm">
                <svg class="w-5 h-5 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Kembali ke Landing
            </a>
            <a href="{{ route('projects.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold shadow-sm hover:shadow-blue-500/10 transition duration-300 transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Project
            </a>
        </div>
    </div>

    <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse align-middle">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50 text-zinc-600 text-xs font-semibold uppercase tracking-wider">
                        <th class="py-4 px-6 w-16 text-center">No</th>
                        <th class="py-4 px-6 w-24">Gambar</th>
                        <th class="py-4 px-6">Judul</th>
                        <th class="py-4 px-6 hidden md:table-cell">Deskripsi</th>
                        <th class="py-4 px-6">Teknologi</th>
                        <th class="py-4 px-6 w-24 text-center">Github</th>
                        <th class="py-4 px-6 w-40 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 text-sm text-zinc-700">
                    @forelse($projects as $project)
                        <tr class="hover:bg-zinc-50/50 transition duration-150">
                            <td class="py-4 px-6 text-center text-zinc-400 font-medium">
                                {{ $loop->iteration }}
                            </td>
                            
                            <td class="py-4 px-6">
                                @if($project->image)
                                    <div class="w-16 h-12 rounded-lg overflow-hidden border border-zinc-200 bg-zinc-50">
                                        <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="w-16 h-12 rounded-lg bg-zinc-50 border border-zinc-200 flex items-center justify-center text-zinc-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </td>

                            <td class="py-4 px-6 font-semibold text-zinc-900">
                                {{ $project->title }}
                            </td>

                            <td class="py-4 px-6 max-w-xs truncate hidden md:table-cell text-zinc-500">
                                {{ $project->description }}
                            </td>

                            <td class="py-4 px-6">
                                @php
                                    $techs = array_map('trim', explode(',', $project->technology));
                                @endphp
                                <div class="flex flex-wrap gap-1">
                                    @foreach($techs as $tech)
                                        @if(!empty($tech))
                                            <span class="px-2 py-0.5 text-[10px] font-medium rounded bg-zinc-50 border border-zinc-200 text-blue-600">
                                                {{ $tech }}
                                            </span>
                                        @endif
                                    @endforeach
                                </div>
                            </td>

                            <td class="py-4 px-6 text-center">
                                @if($project->github)
                                    <a href="{{ $project->github }}" target="_blank" class="inline-flex text-zinc-500 hover:text-blue-600 p-1.5 rounded-lg bg-white border border-zinc-200 hover:border-zinc-300 transition shadow-sm">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"/></svg>
                                    </a>
                                @else
                                    <span class="text-zinc-400">-</span>
                                @endif
                            </td>

                            <td class="py-4 px-6 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('projects.edit', $project->id) }}" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-600 border border-amber-200 hover:bg-amber-500 hover:text-white transition duration-200 text-xs font-semibold">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus project ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-rose-50 text-rose-600 border border-rose-200 hover:bg-rose-500 hover:text-white transition duration-200 text-xs font-semibold">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 px-6 text-center text-zinc-400 bg-white">
                                <svg class="w-12 h-12 text-zinc-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4a2 2 0 012-2m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <span class="font-semibold text-zinc-700">Belum ada project</span>
                                <p class="text-xs text-zinc-400 mt-1">Gunakan tombol "Tambah Project" untuk membuat project baru.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection