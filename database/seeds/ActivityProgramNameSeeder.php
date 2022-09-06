<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivityProgramNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'Education',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'Livelihood',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'Communication & Advocacy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'Humanitarian Aid',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'Events',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('activityProgramName')->insert
        ([
            'programName' => 'General',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
