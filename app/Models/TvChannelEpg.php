<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvChannelEpg extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'channel_code',
        'app_code',
        'stream_code',
        'start_time',
        'duration',
        'end_time',
        'order'
    ];
}
