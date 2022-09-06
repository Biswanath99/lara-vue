<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Designations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designation')->insert(
        [
            'desigName' => 'Accountant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Assistant Program Manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Caretaker',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Chief Executive Officer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Cleaner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('designation')->insert(
        [
            'desigName' => 'Community Animator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Driver-cum-Office Attendant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Executive Assistant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Head Finance',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Head Programs',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Manager-Administration',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('designation')->insert(
        [
            'desigName' => 'Mobilizer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Office Assistant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Office Attendant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Partnerships Officer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Program Manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Program Manager - Communication & Advocacy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Program Manager - Education',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Program Manager - Livelihood',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Project Officer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'State Program Officer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Teacher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('designation')->insert(
        [
            'desigName' => 'Zonal Program Coordinator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
