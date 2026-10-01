<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-5">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.update', $mahasiswa) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block font-medium">NIM</label>
                            <input type="text"
                                   name="nim"
                                   value="{{ old('nim', $mahasiswa->nim) }}"
                                   class="w-full border-gray-300 rounded mt-1"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Nama</label>
                            <input type="text"
                                   name="nama"
                                   value="{{ old('nama', $mahasiswa->nama) }}"
                                   class="w-full border-gray-300 rounded mt-1"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Program Studi</label>
                            <input type="text"
                                   name="program_studi"
                                   value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                                   class="w-full border-gray-300 rounded mt-1"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Email</label>
                            <input type="email"
                                   name="email"
                                   value="{{ old('email', $mahasiswa->email) }}"
                                   class="w-full border-gray-300 rounded mt-1"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Angkatan</label>
                            <input type="number"
                                   name="angkatan"
                                   value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                                   class="w-full border-gray-300 rounded mt-1"
                                   required>
                        </div>

                        <div class="flex gap-2">
                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded">
                                Update
                            </button>

                            <a href="{{ route('mahasiswa.index') }}"
                               class="bg-gray-500 text-white px-4 py-2 rounded">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>