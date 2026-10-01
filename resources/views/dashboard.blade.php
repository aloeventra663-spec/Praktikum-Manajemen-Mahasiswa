<x-app-layout>

    {{-- HEADER --}}
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    Dashboard
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Sistem Manajemen Data Mahasiswa
                </p>
            </div>

            <div class="hidden sm:flex items-center gap-2
                        bg-white px-4 py-2 rounded-xl shadow-sm">
                <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                <span class="text-sm text-gray-600">Online</span>
            </div>
        </div>
    </x-slot>


    {{-- CONTENT --}}
    <div class="min-h-screen bg-slate-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            {{-- HERO --}}
            <div class="relative overflow-hidden
                        bg-gradient-to-br from-indigo-600
                        via-blue-600 to-cyan-500
                        rounded-3xl shadow-xl mb-8">

                {{-- Decoration --}}
                <div class="absolute -right-20 -top-20
                            w-72 h-72 bg-white/10 rounded-full"></div>

                <div class="absolute right-20 -bottom-32
                            w-80 h-80 bg-white/10 rounded-full"></div>

                <div class="relative p-8 sm:p-10">

                    <div class="grid md:grid-cols-2 gap-8 items-center">

                        {{-- Greeting --}}
                        <div>

                            <div class="inline-flex items-center
                                        bg-white/20 backdrop-blur
                                        px-4 py-2 rounded-full
                                        text-white text-sm mb-5">

                                <span class="mr-2">👋</span>
                                Selamat datang kembali
                            </div>

                            <h1 class="text-3xl sm:text-4xl
                                       font-bold text-white">

                                Halo, {{ auth()->user()->name }}!

                            </h1>

                            <p class="text-blue-100 mt-4 max-w-lg leading-relaxed">
                                Selamat datang di Sistem Manajemen Data
                                Mahasiswa. Kelola data mahasiswa dengan
                                mudah dan terstruktur.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">

                                <a href="{{ route('mahasiswa.index') }}"
                                   class="inline-flex items-center
                                          bg-white text-blue-600
                                          font-semibold px-5 py-3
                                          rounded-xl shadow
                                          hover:bg-blue-50
                                          transition">

                                    Lihat Data Mahasiswa

                                    <svg class="w-4 h-4 ml-2"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5l7 7-7 7"/>
                                    </svg>

                                </a>

                            </div>

                        </div>


                        {{-- User Card --}}
                        <div class="hidden md:flex justify-end">

                            <div class="bg-white/15 backdrop-blur-md
                                        border border-white/20
                                        rounded-3xl p-6 w-72">

                                <div class="flex items-center gap-4">

                                    <div class="w-14 h-14 rounded-2xl
                                                bg-white flex items-center
                                                justify-center
                                                text-2xl font-bold
                                                text-blue-600">

                                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                                    </div>

                                    <div>
                                        <p class="text-white font-semibold">
                                            {{ auth()->user()->name }}
                                        </p>

                                        <p class="text-blue-100 text-sm">
                                            {{ auth()->user()->email }}
                                        </p>
                                    </div>

                                </div>

                                <div class="border-t border-white/20 my-5"></div>

                                <div class="flex justify-between">

                                    <span class="text-blue-100 text-sm">
                                        Role
                                    </span>

                                    <span class="bg-white text-blue-600
                                                 px-3 py-1 rounded-full
                                                 text-xs font-bold uppercase">
                                        {{ auth()->user()->role }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>


            {{-- STATISTICS --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
                        gap-5 mb-8">

                {{-- Total Mahasiswa --}}
                <div class="bg-white rounded-2xl p-6
                            border border-gray-100
                            shadow-sm hover:shadow-lg
                            transition duration-300">

                    <div class="flex justify-between items-start">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Mahasiswa
                            </p>

                            <h3 class="text-4xl font-bold
                                       text-gray-800 mt-2">

                                {{ \App\Models\Mahasiswa::count() }}

                            </h3>

                            <p class="text-xs text-gray-400 mt-2">
                                Mahasiswa terdaftar
                            </p>

                        </div>

                        <div class="w-14 h-14 rounded-2xl
                                    bg-blue-100 flex items-center
                                    justify-center">

                            <svg class="w-7 h-7 text-blue-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M17 20h5v-2a4 4 0 00-4-4h-1
                                         M9 20H4v-2a4 4 0 014-4h1
                                         M12 12a4 4 0 100-8 4 4 0 000 8z"/>

                            </svg>

                        </div>

                    </div>
                </div>


                {{-- Role --}}
                <div class="bg-white rounded-2xl p-6
                            border border-gray-100
                            shadow-sm hover:shadow-lg
                            transition duration-300">

                    <div class="flex justify-between items-start">

                        <div>

                            <p class="text-sm text-gray-500">
                                Role Pengguna
                            </p>

                            <h3 class="text-3xl font-bold
                                       text-gray-800 mt-3 uppercase">

                                {{ auth()->user()->role }}

                            </h3>

                            <p class="text-xs text-gray-400 mt-2">
                                Hak akses aplikasi
                            </p>

                        </div>

                        <div class="w-14 h-14 rounded-2xl
                                    bg-purple-100 flex items-center
                                    justify-center">

                            <svg class="w-7 h-7 text-purple-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 11c2.21 0 4-1.79 4-4
                                         s-1.79-4-4-4-4 1.79-4 4
                                         1.79 4 4 4z
                                         M6 21v-2a6 6 0 0112 0v2"/>

                            </svg>

                        </div>

                    </div>
                </div>


                {{-- Status --}}
                <div class="bg-white rounded-2xl p-6
                            border border-gray-100
                            shadow-sm hover:shadow-lg
                            transition duration-300">

                    <div class="flex justify-between items-start">

                        <div>

                            <p class="text-sm text-gray-500">
                                Status Akun
                            </p>

                            <h3 class="text-3xl font-bold
                                       text-emerald-600 mt-3">
                                Aktif
                            </h3>

                            <p class="text-xs text-gray-400 mt-2">
                                Akun berhasil login
                            </p>

                        </div>

                        <div class="w-14 h-14 rounded-2xl
                                    bg-emerald-100 flex items-center
                                    justify-center">

                            <svg class="w-7 h-7 text-emerald-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M5 13l4 4L19 7"/>

                            </svg>

                        </div>

                    </div>
                </div>

            </div>


            {{-- QUICK ACTION --}}
            <div class="mb-4">

                <h2 class="text-xl font-bold text-gray-800">
                    Menu Utama
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Pilih menu yang ingin kamu akses.
                </p>

            </div>


            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- DATA MAHASISWA --}}
                <div class="group bg-white rounded-2xl
                            border border-gray-100
                            p-7 shadow-sm
                            hover:shadow-xl
                            hover:-translate-y-1
                            transition duration-300">

                    <div class="flex items-start gap-5">

                        <div class="w-14 h-14 rounded-2xl
                                    bg-blue-100
                                    flex items-center justify-center
                                    group-hover:bg-blue-600
                                    transition">

                            <svg class="w-7 h-7 text-blue-600
                                        group-hover:text-white"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 6h16M4 10h16M4 14h16M4 18h16"/>

                            </svg>

                        </div>

                        <div class="flex-1">

                            <h3 class="text-xl font-bold text-gray-800">
                                Data Mahasiswa
                            </h3>

                            <p class="text-sm text-gray-500 mt-2
                                      leading-relaxed">

                                Lihat seluruh data mahasiswa yang
                                tersimpan dalam sistem.

                            </p>

                            <a href="{{ route('mahasiswa.index') }}"
                               class="inline-flex items-center
                                      mt-5 text-blue-600
                                      font-semibold
                                      hover:text-blue-800">

                                Buka Data

                                <svg class="w-4 h-4 ml-2"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 5l7 7-7 7"/>

                                </svg>

                            </a>

                        </div>

                    </div>
                </div>


                {{-- ADMIN --}}
                @if(auth()->user()->role === 'admin')

                    <div class="group bg-white rounded-2xl
                                border border-gray-100
                                p-7 shadow-sm
                                hover:shadow-xl
                                hover:-translate-y-1
                                transition duration-300">

                        <div class="flex items-start gap-5">

                            <div class="w-14 h-14 rounded-2xl
                                        bg-indigo-100
                                        flex items-center justify-center
                                        group-hover:bg-indigo-600
                                        transition">

                                <svg class="w-7 h-7 text-indigo-600
                                            group-hover:text-white"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 4v16m8-8H4"/>

                                </svg>

                            </div>

                            <div class="flex-1">

                                <h3 class="text-xl font-bold text-gray-800">
                                    Kelola Mahasiswa
                                </h3>

                                <p class="text-sm text-gray-500 mt-2
                                          leading-relaxed">

                                    Admin dapat menambah, mengubah,
                                    dan menghapus data mahasiswa.

                                </p>

                                <a href="{{ route('mahasiswa.create') }}"
                                   class="inline-flex items-center
                                          mt-5 text-indigo-600
                                          font-semibold
                                          hover:text-indigo-800">

                                    Tambah Mahasiswa

                                    <svg class="w-4 h-4 ml-2"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 4v16m8-8H4"/>

                                    </svg>

                                </a>

                            </div>

                        </div>
                    </div>

                @else

                    {{-- USER --}}
                    <div class="group bg-white rounded-2xl
                                border border-gray-100
                                p-7 shadow-sm
                                hover:shadow-xl
                                hover:-translate-y-1
                                transition duration-300">

                        <div class="flex items-start gap-5">

                            <div class="w-14 h-14 rounded-2xl
                                        bg-emerald-100
                                        flex items-center justify-center">

                                <svg class="w-7 h-7 text-emerald-600"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 12l2 2 4-4m5.618-4.016
                                             A11.955 11.955 0 0112 2.944
                                             a11.955 11.955 0 01-9.618 3.04
                                             A12.02 12.02 0 003 9
                                             c0 5.591 3.824 10.29 9 11.622
                                             5.176-1.332 9-6.03 9-11.622
                                             0-1.042-.133-2.052-.382-3.016z"/>

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-xl font-bold text-gray-800">
                                    Hak Akses User
                                </h3>

                                <p class="text-sm text-gray-500 mt-2
                                          leading-relaxed">

                                    Akun User hanya dapat melihat
                                    data mahasiswa dan tidak dapat
                                    melakukan perubahan data.

                                </p>

                                <div class="inline-flex items-center
                                            mt-5 px-4 py-2
                                            bg-emerald-50
                                            text-emerald-700
                                            rounded-xl text-sm font-medium">

                                    ✓ Akses sesuai role

                                </div>

                            </div>

                        </div>
                    </div>

                @endif

            </div>


            {{-- FOOTER --}}
            <div class="text-center mt-10 pb-4">

                <p class="text-sm text-gray-400">
                    Sistem Manajemen Data Mahasiswa
                </p>

                <p class="text-xs text-gray-300 mt-1">
                    Laravel Breeze • Role Based Access Control
                </p>

            </div>

        </div>
    </div>

</x-app-layout>