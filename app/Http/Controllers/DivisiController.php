<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    // Menampilkan daftar divisi
    public function index()
    {
        $divisi = Divisi::all();
        return view('dashboard.index', compact('divisi'));
    }

    // Menyimpan divisi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:100',
            'keterangan' => 'nullable|string',
        ]);

        Divisi::create($request->all());
        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil ditambahkan.');
    }

    // Menampilkan halaman edit
    public function edit($id)
    {
        $divisi = Divisi::findOrFail($id);
        return view('divisi.edit', compact('divisi'));
    }

    // Memperbarui divisi
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:100',
            'keterangan' => 'nullable|string',
        ]);

        $divisi = Divisi::findOrFail($id);
        $divisi->update($request->all());
        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil diperbarui.');
    }

    // Menghapus divisi
    public function destroy($id)
    {
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();
        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil dihapus.');
    }
}
