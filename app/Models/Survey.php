<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Type;
use App\Models\Answer;
use App\Models\Student;
use App\Models\question_survey;
use App\Models\surveyquestion_answer;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Survey extends Model
{
    use HasFactory;


    public function question()
    {
        return $this->belongsToMany(question::class);
    }
}
