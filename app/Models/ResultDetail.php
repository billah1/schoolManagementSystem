<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultDetail extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    public function studentResult()
    {
        return $this->belongsTo(StudentResult::class, 'student_result_id');
    }
}
