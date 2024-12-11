<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'event_title',
        'event_description',
        'start_date',
        'end_date',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
