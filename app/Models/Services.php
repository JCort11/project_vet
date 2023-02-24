<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
        'service_name',
        'service_price',
        'additioanl_comments',       
    ];
}
