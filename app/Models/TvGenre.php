<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvGenre extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_code',
        'code',
        'title',
        'order',
        'status'
    ];
}
