<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'email', 'year', 'class', 'gender', 'address', 'phone_number', 'enrollment_date', 'status'
    ];

    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
