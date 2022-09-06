DROP VIEW IF EXISTS proposalProjBenfTranchView;
CREATE VIEW proposalProjBenfTranchView AS SELECT 

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
    lvhp.projectStatus,
    lvhp.lvhProjectColonyldrId  projectColonyLeader,
    lvhp.lvhProjectStateldrId   projectStateLeader,
    lvhp.projectLocation,
    lvhp.donationId,
    lvhp.entityName,
    lvhp.costCentre,

    lvpr.id proposalPrimaryId,
    lvpr.proposalId propsalGenId,
    lvpr.parentPropId,
    lvpr.colonyId,
    lvpr.colonyName,
    lvpr.enterpriseName,
    lvpr.proposalTitle,
    lvpr.proposalDate,
    lvpr.pscmNo proposalPscmNo,
    lvpr.proposalAttachmentFile,
    lvpr.proposalSummary,
    lvpr.createdDate proposalCreatedDate,
    lvpr.adminUserId proposalAdminUserId,
    lvpr.submitDate proposalSubmitDate,
    lvpr.donationId proposalDonationId,
    lvpr.comment proposalComment,
    lvpr.status proposalStatus,
    lvpr.active proposalActive,
    lvpr.reviewDate proposalReviewDate,
    lvpr.reviewComment proposalReviewComment,
    lvpr.reviewStatus proposalReviewStatus,
    lvpr.reviewAdminUserId proposalReviewAdminUserId,
    lvpr.approvalDate proposalApprovalDate,
    lvpr.approvalComment proposalApprovalComment,
    lvpr.approvalAdminUserId proposalApprovalAdminUserId,
    lvpr.proposalAmount,
    lvpr.approvedAmount,
    lvpr.status,
    lvpr.proposalApprovedStatus,

    lvbn.lvhProjectId,
    COUNT(lvbn.lvhProjectId) lvhBenfProjectIdCount,
    pscm.pscmName,
    pscm.pscmNo,

    admin1.firstname firstnames,
    admin2.firstname firstnamer,
    admin3.firstname firstnamea,
    admin1.lastname lastnames,
    admin2.lastname lastnamer,
    admin3.lastname lastnamea

    FROM  
    
    lvhProject         AS lvhp,
    -- lvhProposals       AS lvpr,
    lvhProjectBenf     AS lvbn,
    pscmNoTable        AS pscm,
    lvhProposals AS lvpr  LEFT OUTER JOIN admins AS admin1 ON lvpr.adminUserId         = admin1.id
                          LEFT OUTER JOIN admins AS admin2 ON lvpr.reviewAdminUserId   = admin2.id
                        --   INNER JOIN lvhProject  AS lvhp ON lvhp.lvhProposalId         = lvpr.id
                           LEFT OUTER JOIN admins AS admin3 ON lvpr.approvalAdminUserId = admin3.id

    -- lvhProjectTranches AS lvpt
    WHERE 
    lvhp.lvhProposalId       = lvpr.id
    AND   lvbn.lvhProjectId  = lvhp.id
    AND   lvpr.pscmNo        = pscm.id

    -- AND   lvpr.adminUserId          = admin1.id
    -- AND   lvpr.reviewAdminUserId    = admin2.id
    -- AND   lvpr.approvalAdminUserId  = admin3.id
    GROUP BY lvbn.lvhProjectId;