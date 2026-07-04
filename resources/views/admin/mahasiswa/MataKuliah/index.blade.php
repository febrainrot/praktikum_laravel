<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Data Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-700">Daftar Mata Kuliah SIA UNISKA</h3>
                    <a href="{{ route('MataKuliah.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    + Tambah Mata Kuliah
</a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-3 px-4 border-b text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kode MK</th>
                                <th class="py-3 px-4 border-b text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Mata Kuliah</th>
                                <th class="py-3 px-4 border-b text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">SKS</th>
                                <th class="py-3 px-4 border-b text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Semester</th>
                                <th class="py-3 px-4 border-b text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($matakuliah as $mk)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium text-gray-900">{{ $mk->kode_mk }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $mk->nama_mk }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $mk->sks }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $mk->semester }}</td>
                                <td class="py-3 px-4 text-center flex justify-center space-x-2">
                                    <a href="{{ route('MataKuliah.edit', $mk->id) }}" class="text-blue-500 hover:text-blue-700 font-semibold">Edit</a>
                                    <form action="{{ route('MataKuliah.destroy', $mk->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Mata Kuliah ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>