<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvApp extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'favicon',
        'home_logo',
        'home_poster',
        'trending',
        'new_release',
        'bypass_login',
        'refresh_time',
        'free_stream_time',
        'signup_show',
        'landing_theme',
        'feedback_label',
        'feedback_email',
        'noreply_email',
        'email_from',
        'email_signature',
        'status',
        'logo',
        'bg_color',
        'active_color',
        'header_bg_color',
        'navbar_color',
        'card_color',
        'primary_color',
        'secondary_color',
        'navbar_search_color',
        'footer_btn_color',
        'slider_bg_color',
        'slider_title_color',
        'slider_cat_color',
        'web_menu',
    ];
}
