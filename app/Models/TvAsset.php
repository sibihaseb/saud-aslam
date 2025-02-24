<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvAsset extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'code',
        'title',
        'app_code',
        'poster',
        'status'
    ];
}
