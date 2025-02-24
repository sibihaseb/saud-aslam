<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvContentAdvisory extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'app_code',
        'status'
    ];
}
