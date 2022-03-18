<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Student;
use App\Models\question_survey;
use App\Models\Survey;
use App\Models\Question;
use App\Models\surveyquestion_answer;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Answer extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(student::class);
    }

    public function survey_question()
    {
    return $this->belongsToMany(survey_question::class);
    }
}
