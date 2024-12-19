<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    public function run()
    {
        Divisi::insert([
            ['nama_divisi' => 'IT', 'keterangan' => 'Divisi Teknologi Informasi'],
            ['nama_divisi' => 'HRD', 'keterangan' => 'Divisi Sumber Daya Manusia'],
            ['nama_divisi' => 'Keuangan', 'keterangan' => 'Divisi Keuangan'],
        ]);
    }
}
