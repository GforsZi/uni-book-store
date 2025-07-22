<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // User::factory(10)->create();


        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'kategori_bk'   => $faker->word,
                'nama_bk'      => $faker->name,
                'harga_bk'      => $faker->numberBetween(1000, 10000),
                'stok_bk'      => $faker->numberBetween(10, 100),
                'penerbit_bk'      => $faker->name,
            ]);
        }
    }
}
