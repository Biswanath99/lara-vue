<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
        'organizationId'              => 'SELF-00001',
        'organizationType'            => 'SELF',
        'organizationShortName'       => 'SILF',
        'organizationName'            => 'SasaKawa-India',
        'organizationBeneficiaryName' => 'SasaKawa-India',
        'organizationContactName'     => 'Biswanath Banik',
        'organizationContactEmail'    => 'biswanath.srkp@gmail.com',
        'organizationContactNo'       => '7595808940',
        'organizationPanNo'           => 'ABCDE1234D',
        'organizationTanNo'           => 'REQWE1234A',
        'organizationGstNo'           => '19ABFDFWWWWEEDL',
        'organizationBankName'        => 'Axis Bank',
        'organizationBankAc'          => '535656265866562',
        'organizationBankIfscCode'    => 'UTIB0917TRS',
        'organizationStatus'          => 'ACTIVE'
      ]);
    }
}
