<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class actProgCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 1,
            'actCatId'      => 2,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 1,
            'actCatId'      => 5,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 1,
            'actCatId'      => 6,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 1,
            'actCatId'      => 7,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 2,
            'actCatId'      => 2,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 2,
            'actCatId'      => 6,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 2,
            'actCatId'      => 7,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 3,
            'actCatId'      => 2,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 3,
            'actCatId'      => 5,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 3,
            'actCatId'      => 6,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 3,
            'actCatId'      => 7,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 4,
            'actCatId'      => 2,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 4,
            'actCatId'      => 4,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 4,
            'actCatId'      => 6,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 5,
            'actCatId'      => 1,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);


        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 5,
            'actCatId'      => 3,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);

        DB::table('actProgCat')->insert
        ([
            'actProgId'     => 5,
            'actCatId'      => 8,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);
    }
}
