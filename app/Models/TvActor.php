<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvActor extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_code',
        'code',
        'name',
        'type',
        'description',
        'poster',
        'status'
    ];
}
