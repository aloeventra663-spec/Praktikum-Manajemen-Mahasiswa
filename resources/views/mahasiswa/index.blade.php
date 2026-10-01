<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Data Mahasiswa
            </h2>

            @if(auth()->user()->role === 'admin')
                <a href="{{ route('mahasiswa.create') }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    + Tambah Mahasiswa
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border px-4 py-2 text-left">No</th>
                                    <th class="border px-4 py-2 text-left">NIM</th>
                                    <th class="border px-4 py-2 text-left">Nama</th>
                                    <th class="border px-4 py-2 text-left">Program Studi</th>
                                    <th class="border px-4 py-2 text-left">Email</th>
                                    <th class="border px-4 py-2 text-left">Angkatan</th>

                                    @if(auth()->user()->role === 'admin')
                                        <th class="border px-4 py-2 text-left">Aksi</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($mahasiswa as $item)
                                    <tr>
                                        <td class="border px-4 py-2">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nim }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nama }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->program_studi }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->email }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->angkatan }}
                                        </td>

                                        @if(auth()->user()->role === 'admin')
                                            <td class="border px-4 py-2">
                                                <div class="flex gap-2">

                                                    <a href="{{ route('mahasiswa.edit', $item) }}"
                                                       class="bg-yellow-500 text-white px-3 py-1 rounded">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('mahasiswa.destroy', $item) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                                class="bg-red-600 text-white px-3 py-1 rounded">
                                                            Hapus
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="border px-4 py-4 text-center">
                                            Belum ada data mahasiswa.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>