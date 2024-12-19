<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kalender;

class KalenderSeeder extends Seeder
{
    public function run()
    {
        Kalender::insert([
            [
                'id_divisi' => 1,
                'judul_acara' => 'Rapat Proyek ERP',
                'deskripsi' => 'Diskusi terkait implementasi sistem ERP',
                'tanggal_mulai' => '2024-12-20',
                'tanggal_selesai' => '2024-12-20',
            ],
            [
                'id_divisi' => 2,
                'judul_acara' => 'Pelatihan Soft Skill',
                'deskripsi' => 'Pelatihan untuk meningkatkan kemampuan komunikasi',
                'tanggal_mulai' => '2024-12-22',
                'tanggal_selesai' => '2024-12-23',
            ],
        ]);
    }
}
