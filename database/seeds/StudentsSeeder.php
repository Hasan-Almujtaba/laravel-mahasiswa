<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) { 
            DB::table('students')->insert([
                'nama' => $faker->name,
                'nrp' => $faker->randomNumber,
                'email' => $faker->email,
                'jurusan' => $faker->jobTitle
            ]);
        }
    }
}
