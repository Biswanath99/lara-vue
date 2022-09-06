<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert(
            [
                'deptName' => 'Management',
                'deptNo' => 1,
                'deptShortName' => 'MGMT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('department')->insert(
            [
                'deptName' => 'Program',
                'deptNo' => 2,
                'deptShortName' => 'PROG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('department')->insert(
            [
                'deptName' => 'Admin & Finance',
                'deptNo' => 3,
                'deptShortName' => 'AFIN',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
