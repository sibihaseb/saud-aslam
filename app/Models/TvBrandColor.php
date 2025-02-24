<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvBrandColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'code',
        'key',
        'label',
        'color',
        'app_code',
        'order',
        'platform',
        'field_type',
    ];
}
