<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{  
    protected $table="students";
    protected $primarykey="id";
    protected $fillable=[
        "name",
        "address",
        "phone",
    ];
    use HasFactory;
    
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student');
    }
}
