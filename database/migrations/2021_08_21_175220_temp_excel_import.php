<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempExcelImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempExcelImport', function (Blueprint $table) {
            $table->id();
            $table->text('employeeFullName')->nullable(); //Not mapped to table column only in excel    
            $table->string('employeeFirstName')->nullable();
            $table->string('employeeMiddleName')->nullable();
            $table->string('employeeLastName')->nullable();
            $table->string('employeeId')->nullable();
            $table->text('employeeCategory')->nullable(); //Not mapped to table column only in excel
            $table->string('employeeHOZonal')->nullable();
            $table->string('employeeType')->nullable();
            $table->string('employeeRecruitTime')->nullable();
            $table->unsignedBigInteger('employeeDepartmentFK')->nullable();
            $table->text('employeeDepartment')->nullable(); //Not mapped to table column only in excel
            
            $table->unsignedBigInteger('employeeDesignationFK')->nullable();
            $table->text('employeeDesignation')->nullable(); //Not mapped to table column only in excel
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('optAddressId')->nullable();
            $table->string('employeeGender')->nullable();
            $table->string('employeeDateofJoining')->nullable();
            $table->text('employeeDateofLeaving')->nullable(); //Not mapped to table column only in excel
            $table->string('employeeContractStartDate')->nullable();
            $table->text('employeeContractEndDate')->nullable();
            $table->string('employeeDOB')->nullable();
            $table->text('addresSameAsCurrent')->nullable();
            
            $table->string('employeeMobileNo')->nullable();
            $table->string('employeeAlterNateMobileNo')->nullable();
            $table->string('employeeEmailID')->nullable();
            $table->string('employeePanNo')->nullable();
            $table->string('employeeAadharNo')->nullable();
            $table->string('employeeQaulification')->nullable();
            $table->string('employeeBankName')->nullable();
            $table->string('employeeBankACNo')->nullable();
            $table->string('employeeBankIFSCCode')->nullable();
            $table->string('employeeLeprosyAffected')->nullable();
            $table->string('employeeLeprosyAffectedInFamily')->nullable();
            $table->string('employeeStatus')->nullable();
            $table->string('employeeMaritialStatus')->nullable();

            $table->text('employeeCommunicationAddress')->nullable(); //Not mapped to table column only in excel
            $table->string('addressAddln1')->nullable();
            $table->string('addressAddln2')->nullable();
            $table->string('addressCity')->nullable();
            $table->string('addressDistprov')->nullable();
            $table->string('addressState')->nullable();
            $table->string('addressPinzip')->nullable();
            $table->string('addressCountry')->nullable();
            $table->text('employeePermanentAddress')->nullable(); //Not mapped to table column only in excel
            $table->string('addressAddln1P')->nullable();
            $table->string('addressAddln2P')->nullable();
            $table->string('addressCityP')->nullable();
            $table->string('addressDistprovP')->nullable();
            $table->string('addressStateP')->nullable();
            $table->string('addressPinzipP')->nullable();
            $table->string('addressCountryP')->nullable();
            $table->string('addressSameAsCurrent')->nullable();
            $table->string('employeeFathersName')->nullable();
            $table->text('employeeSpouseName')->nullable(); //Not mapped to table column only in excel
            $table->text('employeeBloodGroup')->nullable();
            $table->text('employeeChangeOfDesg')->nullable();
            $table->text('employeeAnnualIncrement')->nullable();
            
            $table->boolean('employeeConsolidatedSalary')->nullable();
            $table->string('employeeTotalSalary')->nullable();
            $table->text('employeeSalaryEffDate')->nullable();
            $table->boolean('employeeSalaryType')->nullable();
            $table->string('employeeBasic')->nullable();
            $table->string('employeeHRA')->nullable();                     
            $table->string('employeeBasketAllowance')->nullable();        

            // family details
            $table->text('employeeFamilyDetailsFullNameSpouse')->nullable(); // Not mapped in table column only in excel and temp table
            $table->text('employeeFamilyDetailsFirstNameSpouse')->nullable();
            $table->text('employeeFamilyDetailsMiddleNameSpouse')->nullable(); //Add in table migration
            $table->text('employeeFamilyDetailsLastNameSpouse')->nullable();	
            $table->text('employeeFamilyDetailsGenderSpouse')->nullable();	
            $table->text('employeeFamilyDetailsDOBSpouse')->nullable();
            $table->text('employeeFamilyDetailsRelationWithHeadSpouse')->nullable();
            $table->text('employeeFamilyDetailsLeprosyAffectedSpouse')->nullable();
            
            $table->text('employeeFamilyDetailsFullNameChild1')->nullable(); // Not mapped in table column only in excel and temp table
            $table->text('employeeFamilyDetailsFirstNameChild1')->nullable();
            $table->text('employeeFamilyDetailsMiddleNameChild1')->nullable(); //Add in table migration
            $table->text('employeeFamilyDetailsLastNameChild1')->nullable();	
            $table->text('employeeFamilyDetailsGenderChild1')->nullable();	
            $table->text('employeeFamilyDetailsDOBChild1')->nullable();
            $table->text('employeeFamilyDetailsRelationWithHeadChild1')->nullable();
            $table->text('employeeFamilyDetailsLeprosyAffectedChild1')->nullable();

            $table->text('employeeFamilyDetailsFullNameChild2')->nullable(); // Not mapped in table column only in excel and temp table
            $table->text('employeeFamilyDetailsFirstNameChild2')->nullable();
            $table->text('employeeFamilyDetailsMiddleNameChild2')->nullable(); //Add in table migration
            $table->text('employeeFamilyDetailsLastNameChild2')->nullable();	
            $table->text('employeeFamilyDetailsGenderChild2')->nullable();	
            $table->text('employeeFamilyDetailsDOBChild2')->nullable();
            $table->text('employeeFamilyDetailsRelationWithHeadChild2')->nullable();
            $table->text('employeeFamilyDetailsLeprosyAffectedChild2')->nullable();

            $table->text('employeeFamilyDetailsFullNameChild3')->nullable(); // Not mapped in table column only in excel and temp table
            $table->text('employeeFamilyDetailsFirstNameChild3')->nullable();
            $table->text('employeeFamilyDetailsMiddleNameChild3')->nullable(); //Add in table migration
            $table->text('employeeFamilyDetailsLastNameChild3')->nullable();	
            $table->text('employeeFamilyDetailsGenderChild3')->nullable();	
            $table->text('employeeFamilyDetailsDOBChild3')->nullable();
            $table->text('employeeFamilyDetailsRelationWithHeadChild3')->nullable();
            $table->text('employeeFamilyDetailsLeprosyAffectedChild3')->nullable();

            // contract details start

                $table->text('employeeContractDetailsContractStartDate')->nullable();
                $table->text('employeeContractDetailsContractEndDate')->nullable();
                $table->string('employeeContractDetailsSalary')->nullable();
                $table->string('employeeContractDetailsDesignation')->nullable();
                $table->string('employeeContractDetailsContractLetter')->nullable();
            // contract details end

            // increment start 

                $table->text('employeeIncrementDate')->nullable();
                $table->string('employeeBasicPay')->nullable();
                $table->string('employeeIncrementPreviousSalary')->nullable();
                $table->string('employeeIncrementNewSalary')->nullable();
                $table->string('employeeIncrementIncrementPercentage')->nullable();
                $table->string('employeeIncrementIncrementLetter')->nullable();

            // increment end
            	
            //health checkup start

                $table->string('employeeHealthCheckupDate')->nullable();
                $table->unsignedBigInteger('employeeHealthCheckupFamilyMemberId')->nullable();
                $table->string('employeeHealthCheckupHospital')->nullable();
                $table->string('employeeHealthCheckupReportSummary')->nullable();
                $table->string('employeeHealthCheckupReportDocuments')->nullable();

            // health checkup end

            // Apprisal summary start

                $table->string('employeeApprisalSummaryDate')->nullable();
                $table->string('employeeApprisalSummaryFinancialYear')->nullable();
                $table->string('employeeApprisalSummaryAppraisedBy')->nullable();
                $table->string('employeeApprisalSummaryReviewedBy')->nullable();
                $table->string('employeeApprisalSummaryAppraisalRecord')->nullable();

            // Apprisal summary end

            // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempExcelImport');
    }
}
