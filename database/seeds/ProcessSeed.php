<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProcessSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('process')->insert(
            [
                'processName' => 'Education',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('process')->insert(
            [
                'processName' => 'Livelihood',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
