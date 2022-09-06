<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FamilyMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familyMembers', function (Blueprint $table) {
            $table->id();
            // Member Details
            $table->string('familyMemberId',16);                                   // Id
            $table->unsignedBigInteger('familyId');
            $table->string('familyMemberFName',24);                               //first name
            $table->string('familyMemberMName',24)->nullable();                    //middle Name
            $table->string('familyMemberLName',24)->nullable();                  //last Name
            $table->date('familyMemberDOB')->nullable();                             // Date Of Birth
            $table->string('familyMemberGender',8)->nullable();                        // Gender
            $table->string('familyMemberRWH',24)->nullable();               // Relation With Head 
            $table->string('familyMemberMaritalSt',16)->nullable();         // Marital Status
            $table->boolean('familyMemberMNC')->nullable();              // Marriage in Colony
            $table->string('familyMemberClass',16)->nullable();             // Class
            $table->string('familyMemberDropOut',8)->nullable();             // Drop Out
            $table->string('familyMemberDropOutReason',32)->nullable();     //drop out reason
            // Member Health Status
            $table->unsignedInteger('familyMemberAge')->nullable();             // Age
            $table->boolean('familyMemberLeprocy')->nullable();                 // Leprocy Affected
            $table->string('familyMemberDeformity',16)->nullable();                // Deformity Type
            $table->boolean('familyMemberDisabilityCertificate')->nullable();   // Disability Certificate Holder
            $table->boolean('familyMemberDOS')->nullable();                     // Experienced Discrimination or Stigma

            // Livelihood Status
            $table->boolean('familyMemberEngLHA')->nullable();                  // Engd. in Livelihood Activities
            $table->string('familyMemberEngType',30)->nullable();                  // Engd. Type
            $table->string('familyMemberEngName',24)->nullable();                  // Engd. Name
            $table->string('familyMemberEngTime',16)->nullable();                  // Engd. Part-Time / Full-Time
            $table->boolean('familyMemberWRJ')->nullable();                     // If not engd. willing to do regular job
            $table->boolean('familyMemberME')->nullable();                      // OK to start a micro enterprise
            $table->boolean('familyMemberBegging')->nullable();                 // Begging
            $table->unsignedInteger('familyMemberIncome')->nullable();          // Income

            // Entitlement
            $table->boolean('familyMemberAwas')->nullable();                // Indira Awas/ PM Awas Yojona
            $table->string('familyMemberLandPatta',30)->nullable();          // LandPatta
            $table->boolean('familyMemberAadharCard')->nullable();          // Aadhar Card
            $table->boolean('familyMemberVoterID')->nullable();             // Voter ID
            $table->boolean('familyMemberRationCard')->nullable();          // Ration Card
            $table->boolean('familyMemberJobCard')->nullable();             // MGNREGA Job Card
            $table->boolean('familyMemberPension')->nullable();             // Pension
            $table->string('familyMemberPensionType',32)->nullable();       // PensionType
            $table->boolean('familyMemberLeprosyCC')->nullable();           // Leprosy Cure Cert.
            $table->boolean('familyMemberHealthIns')->nullable();           // Health Ins. (PM Jan Arogya Yojona)

            // Identity & Bank
            $table->boolean('familyMemberBirthCert')->nullable();           // Birth Certificate
            $table->boolean('familyMemberCasteCert')->nullable();           // Caste Certificate
            $table->boolean('familyMemberPANCard')->nullable();             // PAN Card
            $table->boolean('familyMemberBank')->nullable();                // Bank A/c.
            $table->string('familyMemberBankName',32)->nullable();             // Bank Name
            $table->string('familyMemberBankACNo',24)->nullable()->unique();   // Bank A/c. No.//confusion
            $table->string('familyMemberIFSCode',16)->nullable();               // IFS Code

         // Livelihood Project
            $table->boolean('familyMemberPLP')->nullable();                   // Part of Livelihood Program
            $table->string('familyMemberNPA',32)->nullable();                    // Name of Project Availed
            $table->string('familyMemberPSCM',16)->nullable();                   // PSCM
            $table->unsignedInteger('familyMemberGrantReceived')->nullable(); // Grant Received

            // new column

            $table->string('familyMemberCaste',24)->nullable();                    //caste
            $table->string('familyMemberPOB',24)->nullable();                     //place of birth
            $table->string('familyMemberSIC',16)->nullable();                    //stay in colony
            $table->string('familyMemberContactNo',16)->nullable();             //member phone number
            $table->boolean('familyMemberStigma')->nullable();                 //member stigma
            $table->boolean('familyMemberSchool')->nullable();                //member go to school
            $table->boolean('familyMemberReceivedCertSilf')->nullable();     //member received certificate from silf
            $table->string('familyMemberHealthCare',24)->nullable();        //Health care
            $table->string('familyMemberSourceOfServices',32)->nullable(); //source of services
            $table->string('familyMemberDistanceOfSchool',16)->nullable(); //distance in KM
            $table->string('familyMemberCourse',24)->nullable();           //course
            $table->string('familyMemberSourceOfEarning',32)->nullable(); // source of earning
            $table->string('familyMemberSHG',8)->nullable();             //SHG
         // $table->string('familyMemberRationCardType',16)->nullable(); //Ration card type
            $table->string('familyMemberSupportSilf',32)->nullable(); // dropdown


            //project monitoring tab

            $table->string('familyMembersProjectMonitoringPast',30)->nullable();
            $table->string('familyMembersProjectMonitoringPresent',30)->nullable();
            $table->string('familyMembersProjectMonitoringLeader',30)->nullable();
            $table->string('familyMembersProjectMonitoringStatus',30)->nullable();
            $table->float('familyMembersTotalAmtRcvd')->nullable();
            $table->string('familyMembersMouFileAttachments')->nullable();
            $table->string('familyMembersBankBenfName')->nullable();
            
            $table->string('costCentreEntityName')->nullable();
            $table->string('costCentreName')->nullable();
        
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
        Schema::dropIfExists('familyMembers');
    }
}
