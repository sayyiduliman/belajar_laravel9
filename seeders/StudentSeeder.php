<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $data = [];
        for ($i = 3; $i < 50; $i++){
            $data[]= [
                // ['id' => 1, 'name' => 'Ahmad', 'score' => 90],
                // ['id' => 2, 'name' => 'Sayyid', 'score' => 95],
                'id' => $i + 1, 'name' => $faker->name(), 'score' => $faker->numberBetween(70, 90)
            ];};
        DB::table('student')->insert($data);
    }
}