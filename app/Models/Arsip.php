<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsip';
    protected $primaryKey = 'id_arsip';

    protected $fillable = [
        'id_divisi',
        'parent_id',
        'type', // folder atau file
        'judul',
        'deskripsi',
        'file_path',
    ];

    // Relasi dengan Divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id_divisi');
    }

    // Relasi untuk folder dan subfolder
    public function parent()
    {
        return $this->belongsTo(Arsip::class, 'parent_id', 'id_arsip');
    }

    public function children()
    {
        return $this->hasMany(Arsip::class, 'parent_id', 'id_arsip');
    }
}
