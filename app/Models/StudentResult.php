<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    public function resultMarks()
    {
        return $this->hasMany(ResultDetail::class, 'student_result_id');
    }


}
