<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_code',
        'code',
        'name',
        'type',
        'description',
        'plan_duration',
        'plan_period',
        'amount',
        'order',
        'status'
    ];
}
