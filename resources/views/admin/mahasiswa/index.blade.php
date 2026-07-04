<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                <div class="p-6 text-gray-900">
                    
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Daftar Mahasiswa SIA UNISKA</h3>
                        <a href="{{ url('admin/mahasiswa/create') }}" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md text-sm font-medium transition-colors">
                            + Tambah Data
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-600">
                            <thead class="text-xs uppercase bg-gray-100 text-gray-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-semibold tracking-wider">NPM</th>
                                    <th scope="col" class="px-6 py-4 font-semibold tracking-wider">NAMA</th>
                                    <th scope="col" class="px-6 py-4 font-semibold tracking-wider">JURUSAN</th>
                                    <th scope="col" class="px-6 py-4 font-semibold tracking-wider">ANGKATAN</th>
                                    <th scope="col" class="px-6 py-4 font-semibold tracking-wider text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 border-t border-gray-200">
                                <tr class="bg-white hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">2410010414</td>
                                    <td class="px-6 py-4 font-medium text-gray-900">Orang Dalam</td>
                                    <td class="px-6 py-4">Informatika</td>
                                    <td class="px-6 py-4">2024</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ url('admin/mahasiswa/edit') }}" class="px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-all text-xs font-semibold shadow-sm">
                                                Edit
                                            </a>
                                            <form action="{{ url('admin/mahasiswa/delete') }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1.5 bg-red-600 hover:bg-red-700 text-white rounded-md transition-all text-xs font-semibold shadow-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>