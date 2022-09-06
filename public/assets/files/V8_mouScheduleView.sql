/** mou schedule view**/
DROP VIEW IF EXISTS mouScheduleView;
CREATE VIEW mouScheduleView AS SELECT

mou.id mouTablePrimaryId,
mou.colonyId colonyFK,
mou.familyMemberId familyMemberFK,
mou.mouId mouGenId,
mou.mouType,
mou.mouAmountPayableFixed,
mou.mouAmountPaidFixed,
mou.mouAmountPayableVariable,
mou.mouAmountPaidVariable,
mou.mouTranches,
mou.mouStartDate,
mou.mouEndDate,
mou.mouAttachments,
mou.mouStatus,
mou.costCentreEntityName,
mou.costCentreName,

moups.id mouPaymentSchedulePrimaryId,
moups.mouId mouTableFK,
moups.mouPaymentScheduleTranchesNo,
moups.mouPaymentScheduleTranchesDesc,
moups.mouPaymentScheduleDateOfPayment,
moups.mouPaymentSchedulePercentage,
moups.mouPaymentScheduleAmtFixed,
moups.mouPaymentScheduleReport,
moups.mouPaymentScheduleAmtVariable,
moups.mouPaymentScheduleBills,
moups.mouPaymentScheduleBillsRemarks,
moups.mouPaymentScheduleBillsPrnStatus,
moups.mouPaymentSchedulePrnGenId,
moups.prnHeaderId prnHeaderFK,

mouPrnView.headerPrimaryId,
mouPrnView.mouPrnHeaderId,
mouPrnView.mouPrnHeaderType,
mouPrnView.mouPrnHeaderDate,
mouPrnView.mouPrnHeaderBookedUnder,
mouPrnView.mouPrnHeaderFixedAmt,
mouPrnView.mouPrnHeaderVarAmt,
mouPrnView.mouPrnHeaderPaymentMode,
mouPrnView.mouPrnHeaderPaymentRemarks,
mouPrnView.mouPrnHeaderCurrentTranch,
mouPrnView.prnDonorId,
mouPrnView.prnDonationId,
mouPrnView.mouForeignId,

mouPrnView.mouPrnHeaderPaymentNarration,
mouPrnView.budgetHeadGroup,
mouPrnView.budgetHead,
mouPrnView.imisTrnVoucherGuid,
mouPrnView.imisTrnVoucherPrimaryId,

mouPrnView.detailsPrimaryId,
mouPrnView.mouPrnDetailsBenfFName,
mouPrnView.mouPrnDetailsBenfMName,
mouPrnView.mouPrnDetailsBenfLName,
mouPrnView.mouPrnDetailsBankBenfName,
mouPrnView.mouPrnDetailsBankName,
mouPrnView.mouPrnDetailsBankAcNo,
mouPrnView.mouPrnDetailsBankIfsc,
mouPrnView.mouPrnDetailsAmountFixedPayable,
mouPrnView.mouPrnDetailsAmountVariablePayable,
mouPrnView.mouPrnDetailsAmountFixedPaid,
mouPrnView.mouPrnDetailsAmountVariablePaid,
mouPrnView.mouPrnHeaderId headerForeignId,
mouPrnView.mouPaymentScheduleId,
mouPrnView.costCentreEntityName prnDtlsCostCentreEntityName,
mouPrnView.costCentreName prnDtlCostCentreName,

fm.familyMemberFName,
fm.familyMemberMName,
fm.familyMemberLName,
fm.familyMemberDOB,
fm.familyMemberGender,
fm.familyMemberMaritalSt,
fm.familyMemberAge,
fm.costCentreEntityName familyMmeberCostCentreEntityName,
fm.costCentreName familyMemberCostCentreName,

cl.colonyName,

ad.addressAddln1,
ad.addressAddln2,
ad.addressCity,
ad.addressDistprov,
ad.addressState,
ad.addressPinzip,
ad.addressCountry

FROM  mouTable AS mou,
mouPaymentSchedule AS moups 
LEFT OUTER JOIN mouPrnView ON moups.id = mouPrnView.mouPaymentScheduleId
JOIN familyMembers AS fm
JOIN family  AS fy
JOIN colony  AS cl
JOIN address AS ad
WHERE 
mou.id = moups.mouId
AND fm.familyId        = fy.id
AND fy.colonyId        = cl.id
AND cl.colonyAddressId = ad.id
AND fm.id = mou.familyMemberId;

