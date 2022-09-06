DROP VIEW IF EXISTS businessProposalView;
CREATE VIEW  businessProposalView AS SELECT

lvhprp.id lvhProposalsPrimaryId,
lvhprp.proposalId lvhProposalGenId,
lvhprp.parentPropId,
lvhprp.colonyId,
lvhprp.enterpriseName,
lvhprp.proposalTitle,
lvhprp.createdDate,
lvhprp.pscmNo,
lvhprp.proposalAttachmentFile,
lvhprp.proposalSummary,
lvhprp.adminUserId,
lvhprp.submitDate,
lvhprp.donationId,
lvhprp.comment,
lvhprp.status,
lvhprp.active,
lvhprp.reviewDate,
lvhprp.reviewComment,
lvhprp.reviewStatus,
lvhprp.reviewAdminUserId,
lvhprp.approvalDate,
lvhprp.approvalComment,
lvhprp.approvalAdminUserId,
lvhprp.proposalAmount,
lvhprp.approvedAmount,
lvhprp.proposalApprovedStatus,

cl.colonyId colonyGenId,
cl.colonyName,

adm.firstname  ownerFName,
adm.middlename ownerMName,
adm.lastname   ownerLName,

ad.addressAddln1,
ad.addressAddln2,
ad.addressCity,
ad.addressDistprov,
ad.addressState,
ad.addressPinzip,
ad.addressCountry,

pscm.pscmName

FROM 
lvhProposals AS lvhprp,
colony  AS cl,
address AS ad,
admins  AS adm,
pscmNoTable AS pscm
WHERE lvhprp.colonyId    = cl.id
AND   lvhprp.adminUserId = adm.id
AND   lvhprp.pscmNo      = pscm.id
AND   cl.colonyAddressId = ad.id;