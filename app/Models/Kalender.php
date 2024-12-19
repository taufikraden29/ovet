<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    use HasFactory;

    protected $table = 'kalender';
    protected $primaryKey = 'id_kalender';

    protected $fillable = [
        'id_divisi',
        'judul_acara',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    // Relasi dengan Divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id_divisi');
    }
}
