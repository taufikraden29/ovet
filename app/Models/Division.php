<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_division')
                    ->withTimestamps();
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
