<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BenificiaryType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('domainName')->insert(
        //     [
        //         'name' => 'Beneficiary',
        //         'description' => 'Scholarship Beneficiary ',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);

        DB::table('domainValues')->insert(
            [
                'value' => 'Student',
                'valueDescription' => 'Student Beneficiary',
                'nameId' => 20,
                // 'domainTypeId' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('domainValues')->insert(
            [
                'value' => 'Institute',
                'valueDescription' => 'Institute Beneficiary',
                'nameId' => 20,
                // 'domainTypeId' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
      
    }
}
