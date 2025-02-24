<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvCoupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'offer',
        'description',
        'app_code',
        'expiry_date',
        'percentage',
        'status'
    ];
}
