<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'title',
        'app_code',
        'order',
        'status'
    ];
}
