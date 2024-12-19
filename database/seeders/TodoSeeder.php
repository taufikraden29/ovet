<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToDo;

class ToDoSeeder extends Seeder
{
    public function run()
    {
        ToDo::insert([
            [
                'id_divisi' => 1,
                'judul' => 'Persiapan Server',
                'deskripsi' => 'Konfigurasi server untuk sistem baru',
                'status' => 'pending',
                'tenggat_waktu' => '2024-12-25',
                'tanggal_dibuat' => now(),
            ],
            [
                'id_divisi' => 2,
                'judul' => 'Rekrutmen Staff Baru',
                'deskripsi' => 'Seleksi karyawan untuk posisi Marketing',
                'status' => 'in_progress',
                'tenggat_waktu' => '2024-12-30',
                'tanggal_dibuat' => now(),
            ],
            [
                'id_divisi' => 3,
                'judul' => 'Laporan Keuangan Bulanan',
                'deskripsi' => 'Menyusun laporan keuangan bulan Desember',
                'status' => 'completed',
                'tenggat_waktu' => '2024-12-15',
                'tanggal_dibuat' => now(),
            ],
        ]);
    }
}
