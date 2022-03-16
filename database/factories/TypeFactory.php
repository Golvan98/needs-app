<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type;
use App\Models\Answer;
use App\Models\survey_question;
use App\Models\Survey;
use App\Models\Question;
use App\Models\surveyquestion_answer;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question_id' => Question::factory(),
            'type_name' => $this->faker->word(),
        ];
    }
}
