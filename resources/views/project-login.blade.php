@extends('layouts.app')

@section('title', 'Protected Area | Login')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center bg-zinc-50 px-4">
    <div class="max-w-md w-full bg-white border border-zinc-200 p-8 rounded-2xl shadow-sm">
        <div class="text-center mb-6">
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-3 border border-blue-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h2 class="text-xl font-bold text-zinc-900">Area Terproteksi</h2>
            <p class="text-xs text-zinc-500 mt-1">Masukkan password admin untuk mengelola project.</p>
        </div>

        @if(session('error'))
            <div class="mb-4 p-3 rounded-lg bg-red-50 border border-red-100 text-xs text-red-600 font-medium">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('project.login.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1.5">Password</label>
                <input type="password" name="portfolio_password" required placeholder="••••••••"
                       class="w-full px-4 py-3 rounded-xl border border-zinc-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition text-sm">
            </div>

            <button type="submit" class="w-full py-3 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-white font-medium text-sm transition shadow-sm">
                Masuk Dashboard
            </button>
        </form>
    </div>
</section>
@endsection