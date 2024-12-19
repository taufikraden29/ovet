<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arsip;

class ArsipSeeder extends Seeder
{
    public function run()
    {
        Arsip::insert([
            // Folder IT
            ['id' => 1, 'parent_id' => null, 'type' => 'folder', 'judul' => 'Dokumen Proyek', 'deskripsi' => 'Folder untuk dokumen proyek IT'],

            // File dalam folder IT
            ['id_divisi' => 1, 'parent_id' => 1, 'type' => 'file', 'judul' => 'Proposal Proyek 1', 'deskripsi' => 'Proposal proyek sistem ERP', 'file_path' => '/files/proposal_erp.pdf'],

            // Folder HRD
            ['id_divisi' => 2, 'parent_id' => null, 'type' => 'folder', 'judul' => 'Data Karyawan', 'deskripsi' => 'Folder untuk menyimpan data karyawan'],

            // File dalam folder HRD
            ['id_divisi' => 2, 'parent_id' => 3, 'type' => 'file', 'judul' => 'Daftar Karyawan', 'deskripsi' => 'File daftar karyawan aktif', 'file_path' => '/files/daftar_karyawan.xlsx'],
        ]);
    }
}
