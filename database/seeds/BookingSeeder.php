<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'from_date'=>'2020-08-04',
                'ret_date'=>'2020-08-08',
                'price_booking'=>10,
                'status'=>'R',
                'user_id'=>1,
                'car_id'=>3
            ],
            [
                'from_date'=>'2020-08-14',
                'ret_date'=>'2020-08-18',
                'price_booking'=>15,
                'status'=>'R',
                'user_id'=>1,
                'car_id'=>2
            ],
            [
                'from_date'=>'2020-08-24',
                'ret_date'=>'2020-08-28',
                'price_booking'=>8.95,
                'status'=>'R',
                'user_id'=>2,
                'car_id'=>4
            ],
            [
                'from_date'=>'2020-09-04',
                'ret_date'=>'2020-09-08',
                'price_booking'=>12,
                'status'=>'R',
                'user_id'=>1,
                'car_id'=>3
            ],
        ]);
    }
}
