<?php

namespace Database\Seeders;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create([
            'nama' => 'Informatika',
            'koordinator_prodi' => 'Betha Nurina Saro'
        ]);
        Prodi::create([
            'nama' => 'Informatika',
            'koordinator_prodi' => 'Betha Nurina Saro'
        ]);
        $faker = Faker::create('id_ID');
        $faker->seed(123);
        for ($i = 0; $i < 10; $i++) {
            Mahasiswa::create([
                'npm' => $faker->unique()->numerify('23###########'),
                'nama' => $faker->firstName . ' ' .
                    $faker->lastName,
                'prodi_id' => $faker->numberBetween(1, 2)
            ]);
        }
    }
}
