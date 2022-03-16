<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Type;
use App\Models\Answer;
use App\Models\survey_question;
use App\Models\Survey;
use App\Models\Question;
use App\Models\surveyquestion_answer;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\surveyquestion_answer>
 */
class surveyquestion_answerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'survey_question_id' => survey_question::Factory(),
            'answer_id' => Answer::factory(),
        ];
    }
}
