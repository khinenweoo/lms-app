<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence($nbWords=5,$variableNbWords = true);
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'short_description' => $this->faker->unique()->sentence($nbWords=8, $variableNbWords=true),
            'course_description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'course_requirements' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'course_outcomes' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'cover_image' => 'default_image.jpg',
            'category_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'instructor_id' => $this->faker->randomElement(Instructor::pluck('id')->toArray()),
            'started_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'enroll_close_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'published' => 0,
            'status' => 'enabled',
        ];
    }
}
