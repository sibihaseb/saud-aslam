<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvAppUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'app_code',
        'email',
        'auth_provider',
        'auth_id',
        'mobile',
        'password',
        'image',
        'gender',
        'dob',
        'country_id',
        'activation_code',
        'monetization_type',
        'status',
        'plan_duration',
        'plan_period',
        'amount'
    ];
}
