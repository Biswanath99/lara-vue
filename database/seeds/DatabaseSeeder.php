<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AdminSeed::class);
        // $this->call(userAccessSpecifier::class);
        $this->call(CurrencySeeder::class);
        $this->call(ProgramsSeeder::class);
        $this->call(ProposalSeeder::class);
        $this->call(Departments::class);
        $this->call(Designations::class);
        $this->call(EmployeeLeaveSeeder::class);

        // new added 17 sep 6:40 PM

        $this->call(DocMasterSeed::class);
        // $this->call(DomainNameSeeder::class);
        // $this->call(DomainValuesSeeder::class);
        $this->call(ApplicationSessionSeed::class);
        $this->call(ApplicationScheduleSeed::class);
        $this->call(outcomeSeed::class);
        $this->call(processStepSeed::class);

        //new added on 12 oct
        $this->call(ActivityProgramNameSeeder::class);
        $this->call(ActivityCategorySeeder::class);
        $this->call(ActivitySubCategorySeeder::class);

        $this->call(actProgCatSeeder::class);
        $this->call(actProgCatSubcatSeeder::class);
        
        $this->call(DropdownValuesSeed::class);
        $this->call(beneficiary_name::class);
        $this->call(BenificiaryType::class);
        $this->call(OrganizationSeeder::class);
    }
}
