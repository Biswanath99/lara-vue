<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proposal')->insert([
            [
                'proposalId' => 'PROP-0001',
                'proposalCode' => 'PROP-C001',
                'proposalTitle' => 'The Education Trust',
                'proposalDescription' => 'The Education Trust is a national nonprofit that works to close opportunity gaps that disproportionately affect students of color and students from low-income families.',
                'proposalAgreementFilename' => 'EDTRUST-Agreement.pdf',
                'proposalStatus' => 'pending',
                'programId' => 1,
                'currencyId' => 1, // USD
                'proposalDate' => '2020-11-07',
                'proposalAgreementDate' => '2020-11-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'proposalId' => 'PROP-0002',
                'proposalCode' => 'PROP-C002',
                'proposalTitle' => 'The Kids Cancer Project',
                'proposalDescription' => 'We believe the only way to improve outcomes for kids with cancer is through advances in medical research. Help us find kinder, more effective treatments.',
                'proposalAgreementFilename' => 'TKCP-Agreement.pdf',
                'proposalStatus' => 'pending',
                'programId' => 2,
                'currencyId' => 2, // INR
                'proposalDate' => '2020-11-07',
                'proposalAgreementDate' => '2020-11-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'proposalId' => 'PROP-0003',
                'proposalCode' => 'PROP-C003',
                'proposalTitle' => 'The Education Trust',
                'proposalDescription' => 'The Education Trust is a national nonprofit that works to close opportunity gaps that disproportionately affect students of color and students from low-income families.',
                'proposalAgreementFilename' => 'EDTRUST-Agreement.pdf',
                'proposalStatus' => 'pending',
                'programId' => 1,
                'currencyId' => 2, // INR
                'proposalDate' => '2020-11-08',
                'proposalAgreementDate' => '2020-11-08',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'proposalId' => 'PROP-0004',
                'proposalCode' => 'PROP-C004',
                'proposalTitle' => 'The Kids Cancer Project',
                'proposalDescription' => 'We believe the only way to improve outcomes for kids with cancer is through advances in medical research. Help us find kinder, more effective treatments.',
                'proposalAgreementFilename' => 'TKCP-Agreement.pdf',
                'proposalStatus' => 'pending',
                'programId' => 2,
                'currencyId' => 2, // INR
                'proposalDate' => '2020-11-08',
                'proposalAgreementDate' => '2020-11-08',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
