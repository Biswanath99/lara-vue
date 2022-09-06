<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Anti Leprosy day',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Field visit',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Foundation Day',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Help & Distribution',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);


        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Interview',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Meeting',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Workshop',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activityCategory')->insert
        ([
            'activityCategory'      => 'Youth Festival',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);
    }
}
