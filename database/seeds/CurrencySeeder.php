<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('currencies')->insert([
            [
                'currencyId' => 'CR-1',
                'code' => 'INR',
                'description' => 'Indian Rupee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'currencyId' => 'CR-2',
                'code' => 'USD',
                'description' => 'US Dollar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'currencyId' => 'CR-3',
                'code' => 'JYP',
                'description' => 'Japanese Yen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'currencyId' => 'CR-4',
                'code' => 'BDT',
                'description' => 'Bangladeshi Taka',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
