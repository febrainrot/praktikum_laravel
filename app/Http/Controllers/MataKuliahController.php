<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // 1. Menampilkan daftar mata kuliah
    public function index()
    {
        $matakuliah = MataKuliah::all();
        // Disesuaikan dengan image_907465.jpg (folder MataKuliah ada di dalam mahasiswa)
        return view('admin.mahasiswa.MataKuliah.index', compact('matakuliah'));
    }

    // 2. Menampilkan form tambah data
    public function create()
    {
        return view('admin.mahasiswa.MataKuliah.create');
    }

    // 3. Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
            'semester' => 'required|numeric',
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('MataKuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan!');
    }

    // 4. Menampilkan form edit data
    public function edit(MataKuliah $matakuliah)
    {
        return view('admin.mahasiswa.MataKuliah.edit', compact('matakuliah'));
    }

    // 5. Menyimpan perubahan data ke database
    public function update(Request $request, MataKuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,'.$matakuliah->id,
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
            'semester' => 'required|numeric',
        ]);

        $matakuliah->update($request->all());
        return redirect()->route('MataKuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
    }

    // 6. Menghapus data dari database
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('MataKuliah.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}