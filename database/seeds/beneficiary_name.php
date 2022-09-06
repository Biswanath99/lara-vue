<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class beneficiary_name extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domainName')->insert(
            [
                'name' => 'Beneficiary',
                'description' => 'Scholarship Beneficiary',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
