<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('employeeId');
            $table->string('employeeFirstName');
            $table->string('employeeMiddleName')->nullable();
            $table->string('employeeLastName')->nullable();
            $table->string('employeeBloodGroup')->nullable();
            $table->string('employeeFathersName')->nullable();
            $table->string('employeeType');
            $table->string('employeeRecruitTime')->nullable();
            $table->string('employeeHOZonal')->nullable();
            $table->unsignedBigInteger('employeeDesignation')->nullable();
            $table->date('employeeDOB');
            $table->date('employeeDateofJoining');
            $table->date('employeeContractStartDate')->nullable();
            $table->date('employeeContractEndDate')->nullable();
            $table->string('employeeGender');
            $table->string('employeePanNo')->unique();
            $table->string('employeeAadharNo')->unique();
            $table->string('employeeMaritialStatus');
            $table->string('employeeMobileNo')->unique();
            $table->string('employeeAlterNateMobileNo')->nullable();
            $table->string('employeeEmailID')->unique();
            $table->string('employeeAlternateEmailID')->nullable();
            $table->boolean('employeeAnnualIncrement')->nullable();
            
            $table->string('employeeQaulification')->nullable();
            $table->unsignedBigInteger('employeeDepartment')->nullable();

            $table->boolean('employeeLeprosyAffected');
            $table->boolean('employeeLeprosyAffectedInFamily');
            $table->boolean('employeeStatus')->default(1);

            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('optAddressId')->nullable();
            $table->boolean('employeeConsolidatedSalary')->nullable();
            $table->string('employeeTotalSalary')->nullable();
            $table->date('employeeSalaryEffDate')->nullable();
            $table->boolean('employeeSalaryType')->nullable();
            $table->string('employeeBasic')->nullable();
            $table->string('employeeHRA')->nullable();                     
            $table->string('employeeBasketAllowance')->nullable();         
            $table->string('employeeBankName')->nullable();                
            $table->string('employeeBankACNo')->nullable();                
            $table->string('employeeBankIFSCCode')->nullable(); 
            
            $table->boolean('contractEmployeeConsolidatedSalary')->nullable();
            $table->date('contractEmployeeSalaryEffDate')->nullable();

            $table->string('contractEmployeeTotalSalary')->nullable();
            $table->string('contractEmployeeBasic')->nullable();
            $table->string('contractEmployeeHRA')->nullable();                     
            $table->string('contractEmployeeBasketAllowance')->nullable(); 
            // $table->boolean('contractEmployeeSalaryType')->nullable();  

            
            $table->boolean('employeeEligibleforLeave')->nullable();        
            $table->boolean('employeeCasualLeave')->nullable();             
            $table->boolean('employeeSickLeave')->nullable();                
            $table->boolean('employeePriviledgeLeave')->nullable();         
            $table->boolean('employeeMaternityLeave')->nullable();           
            $table->boolean('employeeMiscarraigeLeave')->nullable();         
    
            $table->boolean('employeePaternityLeave')->nullable();      
            $table->boolean('employeeEligibleforOB')->nullable();     
            $table->boolean('employeeAnnualIncremen')->nullable();      
            $table->boolean('employeeLeaveEncashment')->nullable();      
            $table->boolean('employeeGratuity')->nullable();      
            $table->boolean('employeeHealthInsSelf')->nullable();      
            $table->boolean('employeeHealthInsSpouse')->nullable();      
            $table->boolean('employeeHealthInsChildren')->nullable();     
            $table->boolean('employeeAccidentInsSelf')->nullable();     
            $table->boolean('employeeAccidentInsSpouse')->nullable();    
            $table->boolean('employeeAccidentInsChildren')->nullable();   
            $table->boolean('employeeHealthCheckUpSelf')->nullable();    
            $table->boolean('employeeHealthCheckUpSpouse')->nullable(); 
            
            $table->boolean('employeeHealthCheckUpChildren')->nullable();    
            $table->boolean('employeeMobileExpenses')->nullable();          
            $table->boolean('employeeTravelPolicy')->nullable();
            $table->boolean('addressSameAsCurrent')->nullable();

          //  $table->boolean('contactemployeeConsolidatedSalary')->nullable();
           // $table->date('contactemployeeSalaryEffDate')->nullable();

           // $table->string('contactEmployeeTotalSalary')->nullable();
          //  $table->string('contactemployeeBasic')->nullable();
           // $table->string('contactemployeeHRA')->nullable();                     
           // $table->string('contactemployeeBasketAllowance')->nullable();       

            $table->float('employeeLeaveCF',3,1)->nullable();

            // $table->boolean('contractEmployeeConsolidatedSalary')->nullable();
            // $table->date('contractEmployeeSalaryEffDate')->nullable();

            // $table->string('contractEmployeeTotalSalary')->nullable();
            // $table->string('contractEmployeeBasic')->nullable();
            // $table->string('contractEmployeeHRA')->nullable();                     
            // $table->string('contractEmployeeBasketAllowance')->nullable(); 
            // $table->boolean('contractEmployeeSalaryType')->nullable();  

            $table->unsignedBigInteger('organizationId')->nullable();
            $table->unsignedBigInteger('locationId')->nullable();
            
            $table->timestamps();
        });

        Schema::create('employeeFamilyDetails', function (Blueprint $table) {
            $table->id();
            $table->string('employeeFamilyDetailsRelationWithHead');	
            $table->string('employeeFamilyDetailsFirstName');
            $table->string('employeeFamilyDetailsMiddleName')->nullable();	
            $table->string('employeeFamilyDetailsLastName')->nullable();
            $table->string('employeeFamilyDetailsGender');	
            $table->boolean('employeeFamilyDetailsLeprosyAffected');	
            $table->date('employeeFamilyDetailsDOB');	
            // $table->string('employeeFamilyDetailsCalculatedAge');	
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });
       
        Schema::create('employeeContractDetails', function (Blueprint $table) {
            $table->id();
            // $table->string('employeeContractDetailsCurrentDesignation')->nullable();
            $table->date('employeeContractDetailsContractStartDate')->nullable();
            $table->date('employeeContractDetailsContractEndDate')->nullable();
            $table->string('employeeContractDetailsSalary')->nullable();
            $table->string('employeeContractDetailsDesignation')->nullable();
            $table->string('employeeContractDetailsContractLetter')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeApprisalSummary', function (Blueprint $table) {
            $table->id();
            $table->date('employeeApprisalSummaryDate')->nullable();
            $table->string('employeeApprisalSummaryFinancialYear')->nullable();
            $table->string('employeeApprisalSummaryAppraisedBy')->nullable();
            $table->string('employeeApprisalSummaryReviewedBy')->nullable();
            $table->string('employeeApprisalSummaryAppraisalRecord')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
         });

        Schema::create('employeeIncrement', function (Blueprint $table) {
            $table->id();
            $table->date('employeeStartDate')->nullable();
            $table->date('employeeIncrementDate')->nullable();
            $table->boolean('employeeConsolidatedSalary')->nullable();
            $table->boolean('employeeSalaryType')->nullable();
            $table->string('employeeBasicPay')->nullable();
            $table->string('employeeHRA')->nullable();
            $table->string('employeeBasketAllowance')->nullable();
            $table->string('employeeIncrementPreviousSalary')->nullable();
            $table->string('employeeIncrementNewSalary')->nullable();
            $table->string('employeeIncrementIncrementPercentage')->nullable();
            $table->string('employeeIncrementIncrementLetter')->nullable();
            $table->string('employeeEndDate')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
         });

        Schema::create('employeeHealthCheckup', function (Blueprint $table) {
            $table->id();
            $table->date('employeeHealthCheckupDate')->nullable();
            $table->string('employeeHealthCheckupHospital')->nullable();
            $table->string('employeeHealthCheckupReportSummary')->nullable();
            $table->string('employeeHealthCheckupReportDocuments')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->unsignedBigInteger('employeeHealthCheckupFamilyMemberId')->nullable();
            $table->string('financialYear')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeLeaveDetails', function (Blueprint $table) {
            $table->id();
            $table->string('employeeLeaveDetailsFinancialYear')->nullable();
            $table->float('employeeLeaveDetailsLeaveTaken',3,1)->nullable();
            $table->string('employeeLeaveDetailsLeaveType')->nullable();
            $table->float('employeeLeaveDetailsBalanceLeave',3,1)->nullable();
            $table->float('employeeLeaveDetailsNoOfDays',3,1)->nullable();
            $table->date('employeeLeaveDetailsLeaveStartDate')->nullable();
            $table->date('employeeLeaveDetailsLeaveEndDate')->nullable();
            $table->unsignedBigInteger('employeeLeaveDetailsApproveBy')->nullable();
            $table->string('employeeLeaveDetailsAttachments')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeDocuments', function (Blueprint $table) {
            $table->id();
            $table->string('employeeDocumentsTypes')->nullable();
            $table->string('employeeDocumentsName')->nullable();
            $table->string('employeeDocumentsDescription')->nullable();
            $table->string('employeeDocumentsFile')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeEndOfTerm', function (Blueprint $table) {
            $table->id();

            $table->string('employeeEndOfTermEOTdate')->nullable();
            $table->string('employeeEndOfTermUploadCheckListFile')->nullable();
           
            $table->string('employeeEndOfTermNOCLevel1')->nullable();
            $table->string('employeeEndOfTermGiven1Status')->nullable();
            $table->date('employeeEndOfTermGiven1Date')->nullable();
            $table->string('employeeEndOfTermBy1')->nullable();
           
            $table->string('employeeEndOfTermNOCLevel2')->nullable();
            $table->string('employeeEndOfTermGiven2Status')->nullable();
            $table->date('employeeEndOfTermGiven2Date')->nullable();
            $table->string('employeeEndOfTermBy2')->nullable();
           
            $table->string('employeeEndOfTermNOCLevel3')->nullable();
            $table->string('employeeEndOfTermGiven3Status')->nullable();
            $table->date('employeeEndOfTermGiven3Date')->nullable();
            $table->string('employeeEndOfTermBy3')->nullable();

            $table->string('employeeEndOfTermNOCLevel4')->nullable();
            $table->string('employeeEndOfTermGiven4Status')->nullable();
            $table->date('employeeEndOfTermGiven4Date')->nullable();
            $table->string('employeeEndOfTermBy4')->nullable();

            $table->boolean('employeeEndOfTermGratuityPaidStatus')->nullable();
            $table->date('employeeEndOfTermGratuityPaidOn')->nullable();
            $table->string('employeeEndOfTermGratuityPaidAmount')->nullable();
            $table->boolean('employeeEndOfTermPFPaidStatus')->nullable();

            $table->date('employeeEndOfTermPFPaidOn')->nullable();
            $table->string('employeeEndOfTermPFPaidAmount')->nullable();

            $table->boolean('employeeEndOfTermAnyOtherBenifitsPaidStatus')->nullable();
            $table->date('employeeEndOfTermAnyOtherBenifitsOn')->nullable();       // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTermAnyOtherBenifitsAmount')->nullable(); // not being used nov 26 09:48 AM Biswanath banik

            $table->boolean('employeeEndOfTermLeaveEncashmentPaidStatus')->nullable();
            $table->date('employeeEndOfTermLeaveEncashmentPaidOn')->nullable();        // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTermLeaveEncashmentPaidforDays')->nullable(); // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTermLeaveEncashmentPaidamount')->nullable();  // not being used nov 26 09:48 AM Biswanath banik

            $table->boolean('employeeEndOfTermTravelExpSatus')->nullable();
            $table->date('employeeEndOfTermTravelExpOn')->nullable();          // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTravelExpAmount')->nullable();       // not being used nov 26 09:48 AM Biswanath banik
            
            $table->boolean('employeeEndOfTermMobileExpStatus')->nullable();
            $table->date('employeeEndOfTermMobileExpOn')->nullable();         // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTermMobileExpAmount')->nullable();   // not being used nov 26 09:48 AM Biswanath banik

            $table->string('employeeEndOfTermGenerationOfExperienceCertificateStatus')->nullable();
            $table->date('employeeEndOfTermGenerationOfExperienceCertificateOn')->nullable(); // not being used nov 26 09:48 AM Biswanath banik
            $table->string('employeeEndOfTermGenerationOfExperienceCertificateUploadFile')->nullable();
            
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeLeave', function (Blueprint $table) {
            $table->id();
            $table->string('employeeLeaveDetailsLeaveType')->nullable();
            $table->string('employeeLeaveDetailsTotalLeaveFY')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeHealthInsurance', function (Blueprint $table) {
            $table->id();
            $table->date('effectiveDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('financialYear')->nullable();
            // $table->unsignedBigInteger('insuredTableId')->nullable();
            $table->string('employeeHlInsType')->nullable();
            $table->string('employeeHlInsName')->nullable();
            $table->string('employeeHlPolicyNo')->nullable();
            $table->integer('employeeHlAmountInsured')->nullable();
            $table->integer('employeeHlPremium')->nullable();
            $table->string('healthInsFile')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('employeeAccdntInsurance', function (Blueprint $table) {
            $table->id();
            $table->date('effectiveDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('financialYear')->nullable();
            // $table->unsignedBigInteger('insuredTableId')->nullable();
            $table->string('employeeAcInsType')->nullable();
            $table->string('employeeAcInsName')->nullable();
            $table->string('employeeAcPolicyNo')->nullable();
            $table->integer('employeeAcAmountInsured')->nullable();
            $table->integer('employeeAcPremium')->nullable();
            $table->string('accidentInsFile')->nullable();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->timestamps();
        });

        Schema::create('insuredMemberList', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('memberId')->nullable();//FK
            $table->string('insuranceType')->nullable();
            $table->unsignedBigInteger('employeeInsId')->nullable();//FK
            $table->unsignedBigInteger('employeeId')->nullable();//FK
            $table->timestamps();
        });

        Schema::create('employeeLeavetable', function (Blueprint $table) 
        {
            $table->id();
            $table->string('financialYear')->nullable();
            $table->string('employeeLeaveType')->nullable();
            $table->float('employeeLeaveOB',3,1)->nullable();
            $table->float('employeeLeaveMax',3,1)->nullable();
            $table->float('employeeLeaveUsed',3,1)->nullable();
            $table->float('employeeLeaveBal',3,1)->nullable();
            $table->float('employeeLeaveCF',3,1)->nullable();
            $table->integer('employeeLeaveCNT')->nullable();
            $table->unsignedBigInteger('employeeLeaveId')->nullable();
            $table->unsignedBigInteger('employeeid')->nullable(); // FK employee
            $table->timestamps();
        });

    }//end of up function
    
    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
        Schema::dropIfExists('employeeFamilyDetails');
        Schema::dropIfExists('employeeContractDetails');
        Schema::dropIfExists('employeeApprisalSummary');
        Schema::dropIfExists('employeeIncrement');
        Schema::dropIfExists('employeeHealthCheckup');
        Schema::dropIfExists('employeeLeaveDetails');
        Schema::dropIfExists('employeeDocuments');
        Schema::dropIfExists('employeeEndOfTerm');
        Schema::dropIfExists('employeeLeave');
        Schema::dropIfExists('employeeLeavetable');
        Schema::dropIfExists('employeeHealthInsurance');
        Schema::dropIfExists('employeeAccdntInsurance');
        Schema::dropIfExists('insuredMemberList');
        Schema::dropIfExists('employeeAccdntInsurance');
        
        
    }//end of down function
}