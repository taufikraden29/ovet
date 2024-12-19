<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $primaryKey = 'id_todo';

    protected $fillable = [
        'id_divisi',
        'judul',
        'deskripsi',
        'status', // pending, in_progress, completed
        'tenggat_waktu',
        'tanggal_dibuat',
    ];

    // Relasi dengan Divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id_divisi');
    }
}
