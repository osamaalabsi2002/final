<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarberAdmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'full_name',
        'password'
    ];
}
