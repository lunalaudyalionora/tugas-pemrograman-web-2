<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = fake()->randomElement(['Kuliner','Fashion','Kerajinan','Jasa','Minuman']);
        $name = match($category) {
        'Kuliner' => fake()->randomElement(['Nasi Goreng','Pallubasa','Ayam Geprek','Bakso','Soto']) . ' ' . fake()->randomElement(['Nusa Rasa','Dapoer Una','Laut & Rasa','Jaya']),
        'Fashion' => fake()->randomElement(['Butik','Distro','Konveksi','Toko Baju']) . ' ' . fake()->randomElement(['Modis','Trendy','Hijab','Luna Label']),
        'Kerajinan' => fake()->randomElement(['Kriya Senja','Souvenir','Anyaman']) . ' ' . fake()->city(),
        'Minuman' => fake()->randomElement(['Es Teh Jumbo','Kedai Kopi','Jus Buah','Es Cendol']) . ' ' . fake()->firstName(),
        'Jasa' => fake()->randomElement(['Laundry','Bengkel','Fotocopy','Una Creative Lab']) . ' ' . fake()->randomElement(['Kilat','Barokah','Express']),
        default => 'Toko ' . fake()->word()
    };
        return [
            'name' => $name,
            'owner' => fake()->name(),
            'category' => $category,
            'address' => fake()->streetAddress(),
            'omset' => fake()->numberBetween(2, 100) * 500000 ,
        ];
    }
}
