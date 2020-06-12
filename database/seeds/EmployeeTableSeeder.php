<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $faker = Faker\Factory::create();
            $employee = new \App\Employee();
            $employee->name = $faker->name;
            $employee->dob = $faker->date("d/m/Y");
            $employee->gender = $faker->numberBetween(1, 3);
            $employee->phone = '(0)' . rand(900000001, 999999999);
            $employee->socialID = $faker->numberBetween(111111, 999999);
            $employee->email = $faker->companyEmail;
            $employee->address = $faker->address;
            $employee->group_id = $faker->numberBetween(1, 6);
            $employee->save();
            $i++;

        }
    }

    private function generateRandomDate()
    {
        //Generate a random year using mt_rand.
        $year = mt_rand(1000, date("Y"));

        //Generate a random month.
        $month = mt_rand(1, 12);

        //Generate a random day.
        $day = mt_rand(1, 28);

        //Using the Y-M-D format.
        //Echo.
        return $day . "/" . $month . "/" . $year;
    }
}
