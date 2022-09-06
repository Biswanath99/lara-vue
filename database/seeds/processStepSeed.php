<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class processStepSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('processStep')->insert(
        //     [
        //         'processStepName' => 'Apply',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('processStep')->insert(
        //     [
        //         'processStepName' => 'Review',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        DB::table('processStep')->insert(
            [
                'processStepName' => 'submitProposal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processId'  => 2
            ]);
        DB::table('processStep')->insert(
            [
                'processStepName' => 'reviewProposal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processId'  => 2
            ]);
        DB::table('processStep')->insert(
            [
                'processStepName' => 'approveProposal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processId'  => 2
            ]);
        DB::table('processStep')->insert(
            [
                'processStepName' => 'reviseProposal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processId'  => 2
            ]);
        DB::table('processStep')->insert(
            [
                'processStepName' => 'specialApproveProposal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'processId'  => 2
            ]);
    }
}
