<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'name', 'phone','class', 'enrollment_date'
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }
    
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
