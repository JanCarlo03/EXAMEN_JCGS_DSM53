<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text(800),
            'image' => $this->faker->imageUrl(12800,720),
            'extract' => $this->faker->text(2),

            'user_id' => rand(1,10),
            'category_id' => rand(1,10),

        ];
    }
}
