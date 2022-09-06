<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempColonyImport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempColonyImport', function (Blueprint $table) {
            $table->id();
        // colony table temp
            $table->text('slNo')->nullable();
            $table->string('colonyId')->nullable();
            $table->string('colonyName')->nullable();
            $table->unsignedBigInteger('colonyAddressId')->nullable();
            $table->string('colonyContactNo')->nullable();
            $table->string('colonyContactEmailId')->nullable();
            $table->string('colonyCount')->nullable();

            $table->unsignedBigInteger('colonyLead')->nullable();//FK //family member
            $table->unsignedBigInteger('colonyStateHeadName')->nullable();//FK //family member
            $table->unsignedBigInteger('colonyZPCName')->nullable(); // Fk // employee
     // colony table end

    //  address table start

            $table->string('addressAddln1')->nullable();
            $table->string('addressAddln2')->nullable();
            $table->string('addressCity')->nullable();
            $table->string('addressDistprov')->nullable();
            $table->string('addressState')->nullable();
            $table->string('addressPinzip')->nullable();
            $table->string('addressCountry')->nullable();

    // address table end

    //  family table start

            $table->string('familyId')->nullable();
            $table->string('familyFName')->nullable();
            $table->string('familyMName')->nullable();
            $table->string('familyLName')->nullable();
            $table->string('familyDOB')->nullable();                           
            $table->string('familyGender')->nullable();
            $table->string('familyHouseHoldNo')->nullable();
            $table->string('familyLandPatta')->nullable(); //land patta
            $table->string('familyTOH')->nullable(); // type of house
            $table->string('familyMemberFullName')->nullable(); // member full name
            $table->string('familyMemberRltnParticipant')->nullable(); // rltn participant
            
            
            $table->string('familyHeadId')->nullable();
            $table->string('familyContactNo')->nullable();
            $table->string('familyEmailId')->nullable();
            $table->bigInteger('familyToiletAvailability')->nullable();
            $table->string('familyToiletType')->nullable();
            $table->unsignedBigInteger('toiletId')->nullable();
            $table->bigInteger('familyDrinkingwater')->nullable();
            $table->string('familyDrinkingwaterSource')->nullable(); //drinking water come from
            $table->string('familyDrinkingwaterCheckOut')->nullable(); //drinking water checkout
            
            $table->bigInteger('familyElectricalConnection')->nullable();
            $table->text('familyElectricalConnectionType')->nullable(); //connection type
            $table->bigInteger('familyGasConnection')->nullable();
            $table->string('familyOtherEntitlementStatus')->nullable(); // other entitlement
            $table->boolean('familyRationCard')->nullable();          // Ration Card
            $table->string('familyRationCardType')->nullable();       // ration card type
    // family table end

    // family member table start

        $table->string('familyMemberId')->nullable(); 
        
        $table->string('familyMemberFName')->nullable();
        $table->string('familyMemberMName')->nullable();
        $table->string('familyMemberLName')->nullable();
        $table->string('familyMemberDOB')->nullable();
        $table->string('familyMemberGender')->nullable(); 
        $table->string('familyMemberRWH')->nullable(); 
        $table->string('familyMemberMaritalSt')->nullable(); 
        $table->string('familyMemberCaste')->nullable(); 
        $table->text('familyMemberPOB')->nullable(); //place of birth
        $table->text('familyMemberSIC')->nullable(); //stay in colony
        $table->string('familyMemberContactNo')->nullable(); //member phone number
        $table->boolean('familyMemberStigma')->nullable(); //member stigma
        $table->boolean('familyMemberSchool')->nullable(); //member go to school
        $table->boolean('familyMemberReceivedCertSilf')->nullable(); //member received certificate from silf
        $table->string('familyMemberHealthCare')->nullable(); //Health care
        $table->string('familyMemberSourceOfServices')->nullable(); //source of services
        $table->string('familyMemberDistanceOfSchool')->nullable(); //distance in KM
        $table->string('familyMemberCourse')->nullable(); //course
        $table->boolean('familyMemberMNC')->nullable();
        $table->string('familyMemberClass')->nullable();
        $table->text('familyMemberDropOut')->nullable(); 
        
        $table->string('familyMemberAge')->nullable();                      // Age
        $table->boolean('familyMemberLeprocy')->nullable();                 // Leprocy Affected
        $table->string('familyMemberDeformity')->nullable();                // Deformity Type
        $table->boolean('familyMemberDisabilityCertificate')->nullable();   // Disability Certificate Holder
        $table->boolean('familyMemberDOS')->nullable(); 

        $table->boolean('familyMemberEngLHA')->nullable();                  // Engd. in Livelihood Activities
        $table->text('familyMemberSourceOfEarning')->nullable();          // source of earning
        $table->string('familyMemberEngType')->nullable();                  // Engd. Type
        $table->string('familyMemberEngName')->nullable();                  // Engd. Name
        $table->string('familyMemberEngTime')->nullable();                  // Engd. Part-Time / Full-Time
        $table->boolean('familyMemberWRJ')->nullable();                     // If not engd. willing to do regular job
        $table->boolean('familyMemberME')->nullable();                      // OK to start a micro enterprise
        $table->boolean('familyMemberBegging')->nullable();                 // Begging
        $table->text('familyMemberIncome')->nullable();
        $table->text('familyMemberSHG')->nullable();                      //SHG

            $table->boolean('familyMemberAwas')->nullable();                // Indira Awas/ PM Awas Yojona
            $table->string('familyMemberLandPatta')->nullable();            // LandPatta
            $table->boolean('familyMemberAadharCard')->nullable();          // Aadhar Card
            $table->boolean('familyMemberVoterID')->nullable();             // Voter ID
            $table->boolean('familyMemberRationCard')->nullable();          // Ration Card
            $table->string('familyMemberRationCardType')->nullable();        //ration card type
            $table->boolean('familyMemberJobCard')->nullable();             // MGNREGA Job Card
            $table->boolean('familyMemberPension')->nullable();             // Pension
            $table->text('familyMemberPensionType')->nullable();          // PensionType
            $table->boolean('familyMemberLeprosyCC')->nullable();           // Leprosy Cure Cert.
            $table->boolean('familyMemberHealthIns')->nullable();           // Health Ins. (PM Jan Arogya Yojona)

            $table->boolean('familyMemberBirthCert')->nullable();           // Birth Certificate
            $table->boolean('familyMemberCasteCert')->nullable();           // Caste Certificate
            $table->boolean('familyMemberPANCard')->nullable();             // PAN Card
            $table->boolean('familyMemberBank')->nullable();                // Bank A/c.
            $table->text('familyMemberBankName')->nullable();             // Bank Name
            $table->text('familyMemberBankACNo')->nullable();             // Bank A/c. No.//confusion
            $table->text('familyMemberIFSCode')->nullable();              // IFSC Code

            $table->boolean('familyMemberPLP')->nullable();                   // Part of Livelihood Program
            $table->string('familyMemberNPA')->nullable();                    // Name of Project Availed
            $table->string('familyMemberPSCM')->nullable();                   // PSCM
            $table->unsignedInteger('familyMemberGrantReceived')->nullable(); // Grant Received
            $table->text('familyMemberSupportSilf')->nullable(); //dropdown support
            $table->text('familyToiletFacilities')->nullable(); //stay in colony

    // family details table end
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
        Schema::dropIfExists('tempColonyImport');
    }
}