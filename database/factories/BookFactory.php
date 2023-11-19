<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $languages = Language::query()->inRandomOrder()->first();
        $publisher = Publisher::query()->inRandomOrder()->first();
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
        return [
            //
            'isbn' => $this->faker->isbn13(),
            'title' => $title,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->boolean,
            'number_of_pages' => $this->faker->numberBetween(100, 1000),
            'publication_date' => $this->faker->date(),
            'regular_price' => $this->faker->randomFloat(2, 10, 100),
            'sale_price' => $this->faker->randomFloat(2, 10, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'language_id' => $languages->id,
            'publisher_id' => $publisher->id,
        ];
    }
}
