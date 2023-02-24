<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone_number',
        'address',
        'date_of_birth',
        'email',
        'password',
        'remember_token',
        'image',
    ];
}
