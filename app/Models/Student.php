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
use Illuminate\Database\Eloquent\Relations\Pivot;
class Student extends Model
{
    use HasFactory;

    public function answer()
    {
        return $this->hasMany(answer::class);
    }
}
