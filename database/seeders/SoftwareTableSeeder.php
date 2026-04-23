<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SoftwareTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 5) as $index) {
            DB::table('software')->insert([
                'title' => $faker->word,
                'softdescription' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => now(),
            ]);
        }
    }
}