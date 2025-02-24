<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_code',
        'name',
        'email',
        'mobile',
        'message',
        'ip_address'
    ];
}
