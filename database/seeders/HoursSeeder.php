<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            ['user_id'=> 1,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 1,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 1,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 1,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 1,
                'date'=> '2021-01-09',
                'hour'=> '430'],
            ['user_id'=> 2,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 2,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 2,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 2,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 2,
                'date'=> '2021-01-09',
                'hour'=> '430'],
            ['user_id'=> 3,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 3,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 3,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 3,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 3,
                'date'=> '2021-01-09',
                'hour'=> '430'],
            ['user_id'=> 4,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 4,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 4,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 4,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 4,
                'date'=> '2021-01-09',
                'hour'=> '430'],
            ['user_id'=> 5,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 5,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 5,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 5,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 5,
                'date'=> '2021-01-09',
                'hour'=> '430'],
            ['user_id'=> 6,
                'date'=> '2021-01-05',
                'hour'=> '480'],
            ['user_id'=> 6,
                'date'=> '2021-01-06',
                'hour'=> '485'],
            ['user_id'=> 6,
                'date'=> '2021-01-07',
                'hour'=> '450'],
            ['user_id'=> 6,
                'date'=> '2021-01-08',
                'hour'=> '440'],
            ['user_id'=> 6,
                'date'=> '2021-01-09',
                'hour'=> '430'],

        ]);

    }
}
