<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvChannel extends Model
{
    use HasFactory;
    protected $fillable = [
       'code',
        'channel_no',
        'app_code',
        'name',
        'epg_st_date',
        'description',
        'poster',
        'icon',
        'status',
        'order',
    ];
}
