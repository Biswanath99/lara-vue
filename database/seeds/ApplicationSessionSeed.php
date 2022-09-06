<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApplicationSessionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  already in production 23-24, 22-23 & 21-22 
            need to update production with batch nos and FY dates
                DB::table('applicationSession')->insert([
                    'sessionName'    =>  '2023-24',
                    'start_date'     =>  '01-07-2023',
                    'end_date'       =>  '30-06-2024',
                    'currentSession' =>  0,
                    'closed'         =>  0,
                    'fy_start_date'  =>  '2023-04-01',
                    'fy_end_date'    =>  '2024-03-31',
                    'batchNo'        =>  'BATCH-009',
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now(),
                    ]);

                DB::table('applicationSession')->insert([
                    'sessionName'    =>  '2022-23',
                    'start_date'     =>  '01-07-2022',
                    'end_date'       =>  '30-06-2023',
                    'currentSession' =>  0,
                    'closed'         =>  0,
                    'fy_start_date'  =>  '2022-04-01',
                    'fy_end_date'    =>  '2023-03-31',
                    'batchNo'        =>  'BATCH-008',
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now(),
                    ]);

                DB::table('applicationSession')->insert([
                    'sessionName'    =>  '2021-22',
                    'start_date'     =>  '01-07-2021',
                    'end_date'       =>  '30-06-2022',
                    'currentSession' =>  1,
                    'closed'         =>  0,
                    'fy_start_date'  =>  '2021-04-01',
                    'fy_end_date'    =>  '2022-03-31',
                    'batchNo'        =>  'BATCH-007',
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now(),
                    ]);
                    
        */			

        DB::table('applicationSession')->insert([
            'sessionName'    =>  '2020-21',
            'start_date'     =>  '01-07-2020',
            'end_date'       =>  '30-06-2021',
            'currentSession' =>  0,
            'closed'         =>  1,
            'fy_start_date'  =>  '2020-04-01',
            'fy_end_date'    =>  '2021-03-31',
            'batchNo'        =>  'BATCH-006',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
            ]);


            DB::table('applicationSession')->insert([
            'sessionName'    =>  '2019-20',
            'start_date'     =>  '01-07-2018',
            'end_date'       =>  '30-06-2019',
            'currentSession' =>  0,
            'closed'         =>  1,
            'fy_start_date'  =>  '2019-04-01',
            'fy_end_date'    =>  '2020-03-31',
            'batchNo'        =>  'BATCH-005',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
            ]);

            DB::table('applicationSession')->insert([
            'sessionName'    =>  '2018-19',
            'start_date'     =>  '01-07-2018',
            'end_date'       =>  '30-06-2019',
            'currentSession' =>  0,
            'closed'         =>  1,
            'fy_start_date'  =>  '2018-04-01',
            'fy_end_date'    =>  '2019-03-31',
            'batchNo'        =>  'BATCH-004',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
            ]);

            DB::table('applicationSession')->insert([
            'sessionName'    =>  '2017-18',
            'start_date'     =>  '01-07-2017',
            'end_date'       =>  '30-06-2018',
            'currentSession' =>  0,
            'closed'         =>  1,
            'fy_start_date'  =>  '2017-04-01',
            'fy_end_date'    =>  '2018-03-31',
            'batchNo'        =>  'BATCH-003',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
            ]);

            DB::table('applicationSession')->insert([
                'sessionName'    =>  '2024-25',
                'start_date'     =>  '01-07-2024',
                'end_date'       =>  '30-06-2025',
                'currentSession' =>  0,
                'closed'         =>  1,
                'fy_start_date'  =>  '2024-04-01',
                'fy_end_date'    =>  '2025-03-31',
                'batchNo'        =>  'BATCH-010',
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
                ]);
    }
}
