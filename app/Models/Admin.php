<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

     // Allow mass assignment for these fields
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Optional: hide password when returning model
    protected $hidden = [
        'password',
    ];
}
