<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Answer;
use App\Models\survey_question;
use App\Models\Survey;
use App\Models\Question;
use App\Models\surveyquestion_answer;
use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\Pivot;
class survey_question extends Model
{
    use HasFactory;


    public function answer ()
    {
        return $this->belongsToMany(answer::class);
    }
}