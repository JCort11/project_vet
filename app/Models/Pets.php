<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'type',
        'size',
        'description',
        'date_of_birth',
        'user_id',
        'image',
    ];
}
