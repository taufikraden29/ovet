<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';
    protected $primaryKey = 'id_divisi';

    protected $fillable = [
        'nama_divisi',
        'keterangan',
    ];

    // Relasi dengan Arsip
    public function arsip()
    {
        return $this->hasMany(Arsip::class, 'id_divisi', 'id_divisi');
    }

    // Relasi dengan Kalender
    public function kalender()
    {
        return $this->hasMany(Kalender::class, 'id_divisi', 'id_divisi');
    }

    // Relasi dengan ToDo
    public function todos()
    {
        return $this->hasMany(ToDo::class, 'id_divisi', 'id_divisi');
    }
}
