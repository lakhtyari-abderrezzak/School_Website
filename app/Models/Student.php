<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'subject_id', 'name', 'phone', 'enrollment_date'
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
