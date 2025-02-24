<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSocialLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'social_url',
        'app_code',
        'type',
        'status',
        'order',
    ];
}
