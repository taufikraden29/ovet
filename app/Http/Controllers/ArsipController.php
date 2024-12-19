<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Divisi;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    // Menampilkan daftar arsip
    public function index()
    {
        $arsip = Arsip::with('divisi', 'children')->get();
        return view('arsip.index', compact('arsip'));
    }

    // Menyimpan arsip baru
    public function store(Request $request)
    {
        $request->validate([
            'id_divisi' => 'required|exists:divisi,id_divisi',
            'parent_id' => 'nullable|exists:arsip,id_arsip',
            'type' => 'required|in:folder,file',
            'judul' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'file_path' => 'nullable|string|max:255',
        ]);

        Arsip::create($request->all());
        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil ditambahkan.');
    }

    // Menghapus arsip
    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);
        $arsip->delete();
        return redirect()->route('arsip.index')->with('success', 'Arsip berhasil dihapus.');
    }
}
