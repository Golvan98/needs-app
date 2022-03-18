<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Answer;
use App\Models\question_survey;
use App\Models\Survey;
use App\Models\Question;
use App\Models\surveyquestion_answer;
use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\Pivot;
class question_survey extends Model

{
    
    protected $table = 'question_survey';
    use HasFactory;

    

    public function answer ()
    {
        return $this->belongsToMany(answer::class);
    }
}
