<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrentaldbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fname'=> 'Guillermo',
                'lname'=> 'Cruz',
                'email'=>'admin@example.com',
                'phone'=>'6958-9637',
                'password'=>'admin',
                'access'=>'A'
            ],
            [
                'fname'=> 'Juan',
                'lname'=> 'Campos',
                'email'=>'user@example.com',
                'phone'=>'6248-1645',
                'password'=>'admin',
                'access'=>'N'
            ],

        ]);
        DB::table('car_categories')->insert([
            [
                'category_name'=>'Economic',
                'luggage_amount'=>2,
                'person_number'=>4,
                'cost_perday'=>39.95
            ],
            [
                'category_name'=>'Luxury',
                'luggage_amount'=>5,
                'person_number'=>5,
                'cost_perday'=>79.95
            ],
        ]);
    }
}
