<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IMisProjectForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposal', function (Blueprint $table) {
            $table->foreign('currencyId')->references('id')->on('currencies')->onDelete('cascade');
        });
        Schema::table('proposal', function (Blueprint $table) {
            $table->foreign('programId')->references('id')->on('programs')->onDelete('cascade');
        });
        Schema::table('donors', function (Blueprint $table) {
            $table->foreign('donorAddressId')->references('id')->on('address')->onDelete('cascade');
        });
        Schema::table('donations', function (Blueprint $table) {
            $table->foreign('donorId')->references('id')->on('donors')->onDelete('cascade');
        });
        Schema::table('donations', function (Blueprint $table) {
            $table->foreign('programId')->references('id')->on('programs')->onDelete('cascade');
        });
        Schema::table('donations', function (Blueprint $table) {
            $table->foreign('proposalId')->references('id')->on('proposal')->onDelete('cascade');
        });
        Schema::table('donations', function (Blueprint $table) {
            $table->foreign('currencyId')->references('id')->on('currencies')->onDelete('cascade');
        });
        Schema::table('commitmentSchedule', function (Blueprint $table) {
            $table->foreign('donationlId')->references('id')->on('donations')->onDelete('cascade');
        });
        Schema::table('commitmentSchedule', function (Blueprint $table) {
            $table->foreign('commId')->references('id')->on('commitments')->onDelete('cascade');
        });
        // Schema::table('commitments', function (Blueprint $table) {
        //     $table->foreign('commSchdId')->references('id')->on('commitmentSchedule')->onDelete('cascade');
        // });
        Schema::table('commitments', function (Blueprint $table) {
            $table->foreign('donationlId')->references('id')->on('donations')->onDelete('cascade');
        });
        Schema::table('commitments', function (Blueprint $table) {
            $table->foreign('currencyId')->references('id')->on('currencies')->onDelete('cascade');
        });
        Schema::table('donationRcvd', function (Blueprint $table) {
            $table->foreign('donationlId')->references('id')->on('donations')->onDelete('cascade');
        });
        Schema::table('donationRcvd', function (Blueprint $table) {
            $table->foreign('currencyId')->references('id')->on('currencies')->onDelete('cascade');
        });
        Schema::table('donationRcvd', function (Blueprint $table) {
            $table->foreign('programId')->references('id')->on('programs')->onDelete('cascade');
        });
        // Schema::table('donationRcvd', function (Blueprint $table) {
        //     $table->foreign('commId')->references('id')->on('commitments')->onDelete('cascade');
        // });
        Schema::table('colony', function (Blueprint $table) {
            $table->foreign('colonyAddressId')->references('id')->on('address')->onDelete('cascade');
        });
        // Schema::table('organizations', function (Blueprint $table) {
        //     $table->foreign('organizationAddressId')->references('id')->on('address')->onDelete('cascade');
        // });
        Schema::table('family', function (Blueprint $table) {
            $table->foreign('colonyId')->references('id')->on('colony')->onDelete('cascade');
        });
        Schema::table('familyMembers', function (Blueprint $table) {
            $table->foreign('familyId')->references('id')->on('family')->onDelete('cascade');
        });
        // Schema::table('userAccessSpecifier', function (Blueprint $table) {
        //     $table->foreign('userId')->references('id')->on('admins')->onDelete('cascade');
        // });
        #partner
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('addressId')->references('id')->on('address')->onDelete('cascade');
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('organizationId')->references('id')->on('organizations')->onDelete('cascade');
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->foreign('partnerMemberId')->references('id')->on('partnerMembers')->onDelete('cascade');
        });
        #ins partner
        Schema::table('partnerCourses', function (Blueprint $table) {
            $table->foreign('organizationId')->references('id')->on('organizations')->onDelete('cascade');
        });

        #HR
        Schema::table('employee', function (Blueprint $table) {
            $table->foreign('addressId')->references('id')->on('address')->onDelete('cascade');
        });
        #maintain employee
        Schema::table('employeeFamilyDetails', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeContractDetails', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeApprisalSummary', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeIncrement', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeHealthCheckup', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeLeave', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeDocuments', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('employeeEndOfTerm', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        
        // Schema::table('employeeHealthInsurance', function (Blueprint $table) {
        //     $table->foreign('insuredTableId')->references('id')->on('insuredMemberList')->onDelete('cascade');
        // });
            Schema::table('employeeHealthInsurance', function (Blueprint $table) {
                $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
            });
        // Schema::table('employeeAccdntInsurance', function (Blueprint $table) {
        //     $table->foreign('insuredTableId')->references('id')->on('insuredMemberList')->onDelete('cascade');
        // });
        Schema::table('employeeAccdntInsurance', function (Blueprint $table) {
            $table->foreign('employeeId')->references('id')->on('employee')->onDelete('cascade');
        });
        Schema::table('insuredMemberList', function (Blueprint $table) {
            $table->foreign('memberId')->references('id')->on('employeeFamilyDetails')->onDelete('cascade');
        });
        // Schema::table('insuredMemberList', function (Blueprint $table) {
        //     $table->foreign('employeeInsId')->references('id')->on('employeeHealthInsurance')->onDelete('cascade');
        // });
        // Schema::table('insuredMemberList', function (Blueprint $table) {
        //     $table->foreign('employeeInsId')->references('id')->on('employeeAccdntInsurance')->onDelete('cascade');
        // });

        Schema::table('employee', function (Blueprint $table) {
            $table->foreign('employeeDesignation')->references('id')->on('designation')->onDelete('cascade');
        });
        Schema::table('employee', function (Blueprint $table) {
            $table->foreign('employeeDepartment')->references('id')->on('department')->onDelete('cascade');
        });
        #end Employee
        
        Schema::table('applicationInterview', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicationDetails')->onDelete('cascade');
        });

        Schema::table('applicationInterview', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });

        //cna events

        Schema::table('cnaEvents', function (Blueprint $table) {
            $table->foreign('sessionId')->references('id')->on('applicationSession')->onDelete('cascade');
        });

        Schema::table('cnaEvents', function (Blueprint $table) {
            $table->foreign('addressId')->references('id')->on('address')->onDelete('cascade');
        });

        // add new FK 15 sep
        Schema::table('cnaEventsTask', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        });

        Schema::table('cnaEventsDocuments', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        });

        Schema::table('cnaEventsGuests', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        });

        Schema::table('cnaEventsAttendees', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        });

        // Fk add 16 sep

        Schema::table('cnaEventsOutcome', function (Blueprint $table) {
            $table->foreign('cnaEventsId')->references('id')->on('cnaEvents')->onDelete('cascade');
        });

        #Education scholarship
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicationDetails')->onDelete('cascade');
        });

        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('selectedForCourseLvlValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('selectedForCourseValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('startSession')->references('id')->on('applicationSession')->onDelete('cascade');
        });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('selectedForInstituteId')->references('id')->on('institute')->onDelete('cascade');
        });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('donationlId')->references('id')->on('donations')->onDelete('cascade');
        });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('currencyId')->references('id')->on('currencies')->onDelete('cascade');
        });
        // Schema::table('scholarship', function (Blueprint $table) {
        //     $table->foreign('institutePartnerId')->references('id')->on('users')->onDelete('cascade');
        // });
        Schema::table('scholarship', function (Blueprint $table) {
            $table->foreign('studentBenIeficiaryId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
