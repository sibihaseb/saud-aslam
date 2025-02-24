<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeason extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'show_code',
        'name',
        'app_code',
        'category_code',
        'menu_code',
        'channel_code',
        'genre_code',
        'rating_code',
        'quality_code',
        'tag_code',
        'person_code',
        'cast_code',
        'writer_code',
        'director_code',
        'producer_code',
        'poster',
        'banner',
        'description',
        'released_date',
        'available_date',
        'expiration_date',
        'trailer_url',
        'is_feature',
        'is_home_feature',
        'monetization_type',
        'plan_duration',
        'plan_period',
        'amount',
        'status',
        'sort_by_colomn',
        'sort_by_order'
    ];
}
