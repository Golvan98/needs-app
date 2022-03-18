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
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->unique()->firstName(),
            'middlename' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']),
            'lastname' => $this->faker->unique()->lastName(),
            'college' => $this->faker->randomElement(['COE', 'CCS', 'CASS', 'CBA', 'CON', 'CED', 'CSM']),
            'course' => $this->faker->unique()->word(),
            'year' => $this->faker->numberBetween(1, 4),
        ];
    }
}
