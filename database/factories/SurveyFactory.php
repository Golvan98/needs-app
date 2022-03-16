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
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'survey_name' => $this->faker->unique()->word(),
            'active' => $this->faker->boolean(),
            'school_year' => $this->faker->numberBetween(1, 4)
        ];
    }
}
