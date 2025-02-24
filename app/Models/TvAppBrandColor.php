<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvAppBrandColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'key',
        'label',
        'color',
        'app_code',
        'order',
        'platform',
        'field_type'
    ];
}
