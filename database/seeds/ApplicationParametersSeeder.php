<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApplicationParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
             DB::table('applicationParameters')->insert(
                [
                    'paramId'     => 'APR-00001',
                    'paramName'   => 'ZipMaxSize',
                    'paramValues' => '31457280',
                    'paramDesc'   => 'Zip max file size upto 30 MB',
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ]);

                DB::table('applicationParameters')->insert(
                    [
                        'paramId'     => 'APR-00002',
                        'paramName'   => 'SplUser',
                        'paramValues' => 'bsridhar029@gmail.com',
                        'paramDesc'   => 'Special User Email ID',
                        'created_at'  => Carbon::now(),
                        'updated_at'  => Carbon::now(),
                    ]);
    }
}
