<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Utama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Pesan Selamat Datang -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 font-semibold text-lg flex items-center">
                    Selamat Datang di SIA UNISKA, <span class="text-indigo-600 ml-1"> {{ Auth::user()->name }}!</span> 👋
                </div>
            </div>

            <!-- Grid Statistik (Card) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Card Total Mahasiswa -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white transform transition hover:scale-105 duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-100 text-sm uppercase font-bold tracking-wider">Total Mahasiswa</p>
                            <h3 class="text-4xl font-extrabold mt-2">{{ $totalMahasiswa }}</h3>
                        </div>
                        <div class="p-3 bg-blue-400 bg-opacity-30 rounded-full">
                            <!-- Ikon User -->
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('mahasiswa.index') }}" class="text-sm text-blue-100 hover:text-white font-semibold flex items-center">
                            Kelola Data <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Card Total Mata Kuliah -->
                <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-lg shadow-lg p-6 text-white transform transition hover:scale-105 duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-emerald-100 text-sm uppercase font-bold tracking-wider">Total Mata Kuliah</p>
                            <h3 class="text-4xl font-extrabold mt-2">{{ $totalMK }}</h3>
                        </div>
                        <div class="p-3 bg-emerald-400 bg-opacity-30 rounded-full">
                            <!-- Ikon Buku -->
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('MataKuliah.index') }}" class="text-sm text-emerald-100 hover:text-white font-semibold flex items-center">
                            Kelola Data <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>