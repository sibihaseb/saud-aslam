<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'app_code',
        'description',
        'top_tv_show',
        'poster',
        'status',
        'order'
    ];
}
