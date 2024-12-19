<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use App\Models\Divisi;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    // Menampilkan daftar acara di kalender
    public function index()
    {
        $kalender = Kalender::with('divisi')->get();
        return view('kalender.index', compact('kalender'));
    }

    // Menyimpan acara baru
    public function store(Request $request)
    {
        $request->validate([
            'id_divisi' => 'required|exists:divisi,id_divisi',
            'judul_acara' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        ]);

        Kalender::create($request->all());
        return redirect()->route('kalender.index')->with('success', 'Acara berhasil ditambahkan.');
    }

    // Memperbarui acara
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_divisi' => 'required|exists:divisi,id_divisi',
            'judul_acara' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        ]);

        $kalender = Kalender::findOrFail($id);
        $kalender->update($request->all());
        return redirect()->route('kalender.index')->with('success', 'Acara berhasil diperbarui.');
    }

    // Menghapus acara
    public function destroy($id)
    {
        $kalender = Kalender::findOrFail($id);
        $kalender->delete();
        return redirect()->route('kalender.index')->with('success', 'Acara berhasil dihapus.');
    }
}
