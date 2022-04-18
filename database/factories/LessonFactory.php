<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Support\Str;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        $lesson_title = $this->faker->unique()->sentence($nbWords=6,$variableNbWords = true);
        $lesson_slug = Str::slug($lesson_title);

        return [
            'course_id' => $this->faker->randomElement(Course::pluck('id')->toArray()),
            'title' => $lesson_title,
            'slug' => $lesson_slug,
            'lesson_image' => $this->faker->imageUrl($width = 640, $height = 480),
            'short_text' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'full_text' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
        ];
    }
}
