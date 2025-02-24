<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvStreamQuality extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'title',
        'order',
        'app_code',
        'status'
    ];
}
