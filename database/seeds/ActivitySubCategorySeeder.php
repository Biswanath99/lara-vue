<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivitySubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'ALD',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);


        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Beneficiaries',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);


        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Empowerment',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Evaluation',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);


        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Global Appeal',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Learning Centres',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Mobilisation',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'National',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Other',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Project Monitoring',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        
        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Regional',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'RtD Awards',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Scholars',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);


        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Sensitisation & Awareness',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'SHG',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Stakeholders',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

       

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'State Level meeting',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Training & exposure',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

        DB::table('activitySubCategory')->insert
        ([
            'activitySubCategory'   => 'Zoom Meetings',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        ]);

    }
}
