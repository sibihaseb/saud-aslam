<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'app_code',
        'show_home',
        'show_footer',
        'menu_code',
        'type',
        'card_type',
        'status',
        'sort_by_colomn',
        'sort_by_order',
        'order',
        'video_order',
    ];
}
