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
        $faker = Faker::create("ru_RU");
        // User::factory(10)->create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'name_ctgy'      => $faker->unique()->word(),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('authors')->insert([
                'name_ath'   => $faker->name,
                'address_ath'      => $faker->address,
                'city_ath'      => $faker->city,
                'phone_number_ath'      => $faker->phoneNumber,
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'category_id'   => $faker->numberBetween(1, 10),
                'title_bk'      => $faker->name,
                'price_bk'      => $faker->numberBetween(90000, 1000000),
                'stock_bk'      => $faker->numberBetween(10, 100),
                'author_id'      => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
