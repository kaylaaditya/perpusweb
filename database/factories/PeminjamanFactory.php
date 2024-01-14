<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no' => $this->faker->sentence,
            'nama_peminjam' => $this->faker->name(),
            'nama_buku' => $this->faker->name(),
            'tgl_pinjam' => $this->faker->date(),
            'tgl_pengembalian' => $this->faker->date(),
            'rating' => $this->faker->year,
            'ulasan' => $this->faker->year,
            'status_peminjam' => $this->faker->year,
            
        ];
    }
}
