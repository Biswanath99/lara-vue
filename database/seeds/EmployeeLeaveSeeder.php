<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeLeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employeeLeave')->insert([
            [
                'employeeLeaveDetailsLeaveType' => 'Casual Leave',
                'employeeLeaveDetailsTotalLeaveFY' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employeeLeaveDetailsLeaveType' => 'Sick Leave',
                'employeeLeaveDetailsTotalLeaveFY' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employeeLeaveDetailsLeaveType' => 'Privilege Leave',
                'employeeLeaveDetailsTotalLeaveFY' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employeeLeaveDetailsLeaveType' => 'Maternity Leave',
                'employeeLeaveDetailsTotalLeaveFY' => '168',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employeeLeaveDetailsLeaveType' => 'Paternity Leave',
                'employeeLeaveDetailsTotalLeaveFY' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
