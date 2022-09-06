<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class outcomeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('outcome')->insert(
        //     [
        //         'outcomeName' => 'Created',
        //         'processStepId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('outcome')->insert(
        //     [
        //         'outcomeName' => 'Submitted',
        //         'processStepId' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('outcome')->insert(
        //     [
        //         'outcomeName' => 'Returned',
        //         'processStepId' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // DB::table('outcome')->insert(
        //     [
        //         'outcomeName' => 'Accepted',
        //         'processStepId' => 2,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);

        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Created',
                'processStepId' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Submitted',
                'processStepId' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Review-Forwarded',
                'processStepId' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Review-Returned',
                'processStepId' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Review-Forwarded',
                'processStepId' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'PSCM-Approved',
                'processStepId' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'PSCM-Returned',
                'processStepId' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'PSCM-Rejected',
                'processStepId' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Revised',
                'processStepId' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Re-created',
                'processStepId' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Re-submitted',
                'processStepId' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Spcl-returned',
                'processStepId' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Spcl-rejected',
                'processStepId' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('outcome')->insert(
            [
                'outcomeName' => 'Spcl-approved',
                'processStepId' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
        
    }
}
