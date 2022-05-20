<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $gender=array("M","F");
            $random = array_rand($gender,2);
            Student::insert([
                'Fname'=> $faker->name,
                'LName' => $faker->name,
                'Address' => $faker->address,
                'Phone' => rand(00000000,99999999),
                'Gender' => $gender[$random],
            ]);
        }
    }
}
