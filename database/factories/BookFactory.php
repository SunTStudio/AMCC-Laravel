<?php

namespace Database\Factories;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Book::class;
     public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'jumlah_halaman' => $this->faker->numberBetween(50, 500),
            'tanggal_terbit' => $this->faker->date,
        ];
    }
}
