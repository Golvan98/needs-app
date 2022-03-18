<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Answer;
use App\Models\Student;
use App\Models\question_survey;
use App\Models\Survey;
use App\Models\surveyquestion_answer;
use Illuminate\Database\Eloquent\Relations\Pivot;



class Question extends Model
{
    use HasFactory;
    
    public function type()
    {
        return $this->hasMany(type::class);
    }

    public function survey()
    {
        return $this->belongsToMany(survey::class);
    }
}
