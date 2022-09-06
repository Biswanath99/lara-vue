DROP VIEW IF EXISTS lvhProjBenfManagePrnView;
CREATE VIEW lvhProjBenfManagePrnView AS SELECT 

/* lvhProject column list start*/

    lvhp.id projectPrimaryId,
    lvhp.lvhProjectTitle,
    lvhp.lvhProjectType,
    lvhp.lvhProjectNo,
    lvhp.lvhProjectFinancialYr,
    lvhp.lvhProjectFileName,
    lvhp.lvhProjectBugetSlNo,
    lvhp.lvhProjectBudgetHead,
    lvhp.lvhProjectGrantPaid,
    lvhp.lvhProjectApprovalDate,
    lvhp.lvhProjectTranches,
    lvhp.lvhProjectGrantAmount,
    lvhp.lvhProjectNoOfBenf,
    lvhp.pscmId,
    lvhp.lvhProposalId,
    lvhp.projectLocation,

/* lvhProject column list end */


    /* lvhProjectBenf column list start*/

        lvhpb.id lvbnPrimaryId,
        lvhpb.lvhProjectId lvhProjectId,
        lvhpb.beneficiaryId beneficiaryId,
        lvhpb.lvhProposalId lvbnProposalId,
        lvhpb.lvhProjectBenfType lvhProjectBenfType,
        lvhpb.lvhProjectBenfStatus lvhProjectBenfStatus,
        lvhpb.lvhProjectBenfAmount lvhProjectBenfAmount,
        lvhpb.lvhProjectBenfTotalPaid lvhProjectBenfTotalPaid,

    /* lvhProjectBenf column list end*/  

    /* lvhProjectTranches column list start*/
        
        lvhpt.id lvptrnPrimaryId,
        lvhpt.lvhProjectTranchesSchDate lvhProjectTranchesSchDate,
        lvhpt.lvhProjectTranchesActDate lvhProjectTranchesActDate,
        lvhpt.lvhProjectTranchesAmountPaidToBenf lvhProjectTranchesAmountPaidToBenf,
        lvhpt.lvhProjectTranchesAmount lvhProjectTranchesAmount,
        lvhpt.lvhProjectTranchesStatus lvhProjectTranchesStatus,
        lvhpt.lvhProjectId tranchLvhProjectId,
        lvhpt.lvhProposalId tranchLvhProposalId,
        lvhpt.lvhProjectTranchesRemark lvhProjectTranchesRemark,
        lvhpt.lvhProjectTranchesNo lvhProjectTranchesNo,
        
    /* lvhProjectTranches column list end*/

    /* lvhProjectBenfTranch column list start */

        lvhpbt.id lvpbntrnPrimaryId,
        lvhpbt.BenifIciaryId benfTranchBenifIciaryId,
        lvhpbt.lvhProjectId benfTranchlvhProjectId,
        lvhpbt.lvhProjectBenfId lvhProjectBenfId,
        lvhpbt.lvhProjectTranchesId lvhProjectTranchesId,
        lvhpbt.lvhProjectBenfTranchPayableAmount lvhProjectBenfTranchPayableAmount,
        lvhpbt.lvhProjectBenfTranchPaidAmount lvhProjectBenfTranchPaidAmount,
        lvhpbt.lvhProjectTranchesBenefRemark lvhProjectTranchesBenefRemark,
        lvhpbt.lvhProjectBenfTranchStatus lvhProjectBenfTranchStatus,
        lvhpbt.lvhPrnHeaderId lvhPrnHeaderId,
        lvhpbt.lvhPrnGenId lvhPrnGenId,
        lvhpbt.costCentre costCentre,
        lvhpbt.costCentreEntity costCentreEntity,

   /* lvhProjectBenfTranch column list end */

   /* familymember column list start */
        flym.id memberPrimaryId,
        flym.familyMemberFName memberFirstName,
        flym.familyMemberMName memberMiddleName,
        flym.familyMemberLName memberLastName,
        flym.familyMemberDOB memberDOB,
        flym.familyMemberGender memberGender,
        flym.familyMemberAge memberAge,
        flym.familyMemberBankName memberBankName,
        flym.familyMemberBankACNo memberACNo,
        flym.familyMemberIFSCode memberIfscCode,

   /* familymember column list start */

    /* pscm column list start */

        pscm.pscmName,
        pscm.pscmNo,
     
    /* pscm column list end */


    /*Header and Details */

lvhPrnView.lvhPrnHeaderPrimaryId lvhPrnHeaderPrimaryId,
lvhPrnView.lvhPrnHeaderGenId lvhPrnHeaderGenId,
lvhPrnView.prnType,
lvhPrnView.prnDate,
lvhPrnView.prnBookedUnder,
lvhPrnView.prnDonorId,
lvhPrnView.prnDonationId,
lvhPrnView.totalPrnAmount,
lvhPrnView.prnPaymentMode,
lvhPrnView.prnPaymentRemarks,
lvhPrnView.lvhPrnHeaderBudgetHeadSlNo,
lvhPrnView.lvhPrnHeaderBudgetHead,
lvhPrnView.lvhPrnHeaderPSCMName,
lvhPrnView.lvhPrnHeaderProjectNo,
lvhPrnView.lvhPrnHeaderProjectName,
lvhPrnView.lvhPrnHeaderBenfCount,
lvhPrnView.lvhPrnHeaderApprovedGrantAmt,
lvhPrnView.lvhPrnHeaderDelayReason,
lvhPrnView.lvhPrnHeaderSchPayment,
lvhPrnView.lvhPrnHeaderCurrenrTranch,

lvhPrnView.lvhPrnDetailsPrimaryId lvhPrnDetailsPrimaryId,
lvhPrnView.lvhPrnDetailsBenfFName,
lvhPrnView.lvhPrnDetailsBenfLName,
lvhPrnView.lvhPrnDetailsBankName,
lvhPrnView.lvhPrnDetailsBankAcNo,
lvhPrnView.lvhPrnDetailsBankIfsc,
lvhPrnView.lvhPrnDetailsAmount,
lvhPrnView.lvhPrnDetailsHeaderForeignId lvhPrnDetailsHeaderForeignId,
lvhPrnView.lvhProjectBenfTranchId,
lvhPrnView.prnPaymentDetailsFile

    
   FROM  
   lvhProject           AS lvhp,
   lvhProjectBenf       AS lvhpb,
   lvhProjectTranches   AS lvhpt,
   familyMembers        AS flym,
   pscmNoTable          AS pscm,
   lvhProjectBenfTranch AS lvhpbt
   LEFT OUTER JOIN lvhPrnView ON lvhpbt.id = lvhPrnView.lvhProjectBenfTranchId

    WHERE 
    lvhpbt.lvhProjectBenfId          = lvhpb.id
    AND lvhpbt.lvhProjectTranchesId  = lvhpt.id
    AND lvhpt.lvhProjectId           = lvhp.id
    AND lvhpb.beneficiaryId          = flym.id
    AND lvhp.pscmId                  = pscm.id
    ORDER BY lvhp.id,lvhpt.id,lvhpb.id;