<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new \App\Group();
        $group->name = 'Receptionist';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Human Resources';
        $group->save();

        $group = new \App\Group();
        $group->name = 'System Admin';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Booking Manager';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Customer Care';
        $group->save();
        $group = new \App\Group();
        $group->name = 'Room Services';
        $group->save();


    }
}
