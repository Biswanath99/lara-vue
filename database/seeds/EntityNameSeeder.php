<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EntityNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entityNameTable')->insert([
            [
                'entityName' => 'F C R A',
                'entityDesc' => 'F C R A Description',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'entityName' => 'I N R',
                'entityDesc' => 'I N R Description',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
