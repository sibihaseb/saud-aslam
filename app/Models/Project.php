<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'images',
        'ended_on',
    ];

    protected $casts = [
        'ended_on' => 'datetime',
    ];
}
