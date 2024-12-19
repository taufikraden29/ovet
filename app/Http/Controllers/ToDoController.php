<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Models\Divisi;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    // Menampilkan semua To-Do
    public function index()
    {
        $todos = ToDo::with('divisi')->get();
        return view('todo.index', compact('todos'));
    }
    // Menyimpan To-Do baru
    public function store(Request $request)
    {
        $request->validate([
            'id_divisi' => 'required|exists:divisi,id_divisi',
            'judul' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'status' => 'nullable|in:pending,in_progress,completed',
            'tenggat_waktu' => 'nullable|date',
        ]);

        ToDo::create([
            'id_divisi' => $request->id_divisi,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status ?? 'pending',
            'tenggat_waktu' => $request->tenggat_waktu,
            'tanggal_dibuat' => now(),
        ]);

        return redirect()->route('todo.index')->with('success', 'To-Do berhasil ditambahkan.');
    }

    // Memperbarui To-Do
    public function update(Request $request, $id)
    {
        $todo = ToDo::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:200',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'tenggat_waktu' => 'nullable|date',
        ]);

        $todo->update($request->all());
        return redirect()->route('todo.index')->with('success', 'To-Do berhasil diperbarui.');
    }

    // Menghapus To-Do
    public function destroy($id)
    {
        $todo = ToDo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'To-Do berhasil dihapus.');
    }

    // Mengubah status To-Do
    public function updateStatus(Request $request, $id)
    {
        $todo = ToDo::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $todo->update([
            'status' => $request->status,
        ]);

        return redirect()->route('todo.index')->with('success', 'Status To-Do berhasil diperbarui.');
    }
}

