<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programs')->insert([
            [
                'programId' => 'PROG-0001',
                'programCode' => 'PROG-C001',
                'programName' => 'LIVELIHOOD',
                'programDesc' => 'Donation for The Education Trust',
                'dateUpdated' => '2020-11-07',
                'fileDateUpdated' => '2020-11-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'programId' => 'PROG-0002',
                'programCode' => 'PROG-C002',
                'programName' => 'EDUCATION',
                'programDesc' => 'Donation for The Kids Cancer Project',
                'dateUpdated' => '2020-11-07',
                'fileDateUpdated' => '2020-11-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'programId' => 'PROG-0003',
                'programCode' => 'PROG-C003',
                'programName' => 'TRAINING',
                'programDesc' => 'Donation for The Education Trust',
                'dateUpdated' => '2020-11-08',
                'fileDateUpdated' => '2020-11-08',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'programId' => 'PROG-0004',
                'programCode' => 'PROG-C004',
                'programName' => 'AWARENESS',
                'programDesc' => 'Donation for The Kids Cancer Project',
                'dateUpdated' => '2020-11-08',
                'fileDateUpdated' => '2020-11-08',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
