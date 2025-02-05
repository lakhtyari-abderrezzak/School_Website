<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id', 'subject_id', 'full_name', 'phone', 
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
