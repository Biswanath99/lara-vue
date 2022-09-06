/** scholarship schedule view new**/
DROP VIEW IF EXISTS scholarshipScheduleView;
CREATE VIEW scholarshipScheduleView AS SELECT
app.id appDetailsId,

app.schApplicationId schApplicationId,
app.appIdShow appIdShow,
app.applicationType applicationType,
app.scholarshipTypeValueId scholarshipTypeValueId,
app.scholarshipType scholarshipType,
app.mailStatus mailStatus,

app.userId userId,

app.sessionId sessionId,
aps.sessionName sessionName,
apsay.id apsaySessionId,
apsay.sessionName apsaySessionName,
aps.batchNo apsBatchNo,
aps.batchNoSr2 apsBatchNoSr2,

aps.start_date sessionAppStartDate,
aps.end_date sessionAppEndDate,
aps.currentSession currentSession,
aps.closed sessionClosed,
aps.fy_start_date sessionFyStartDate,
aps.fy_end_date sessionFyEndDate,

app.applicantNameF applicantNameF,
app.applicantNameM applicantNameM,
app.applicantNameL aplicantNameL,
app.applicantFatherName applicantFatherName,
app.applicantDOB   applicantDOB,
app.applicantGender applicantGender,
app.applicantLeprosyAffectedSelf applicantLeprosyAffectedSelf,
app.applicantLeprosyAffectedFather applicantLeprosyAffectedFather,
app.applicantLeprosyAffectedMother applicantLeprosyAffectedMother,
app.applicantDisablitySelf applicantDisablitySelf,
app.applicantDisablityFather applicantDisablityFather,
app.applicantDisablityMother applicantDisablityMother,
app.applicantContactNoSelf applicantContactNoSelf,
app.applicantContactNoGuardian applicantContactNoGuardian,
app.applicantEmailId applicantEmailId,

pad.addressAddln1 addressAddln1,
pad.addressAddln2 addressAddln2,
pad.addressCity addressCity,
pad.addressDistprov addressDistprov,
pad.addressState addressState,
pad.addressPinzip addressPinzip,

app.hasAdmissionLetter hasAdmissionLetter,
app.appStatus appStatus,
app.appStatusSeqNo appStatusSeqNo,
scholarship.id scholId,
scholarship.courseDurationInYears scholDuration,
scholarship.courseStartDate  scholStartDate,
scholarship.courseEndDate  scholEndDate,

ins.instituteName instituteName,
ins.id insId,
ins.instituteAddressId instituteAddressId,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,
scholarship.costCentre costCentre,

dv.value domainValue,
dn.description domainName,

aps.sessionName startSessionName,
scholarship.schStatus schStatus,

academicYrSchol.id	academicYrId,
academicYrSchol.scholarshipId scholarshipId,
academicYrSchol.academicYrDonationId,
academicYrSchol.academicYrSessionId academicYrSessionId,
academicYrSchol.academicYrStartDate academicYrStartDate,
academicYrSchol.academicYrEndDate academicYrEndDate,
academicYrSchol.academicYrDonationStatus academicYrDonationStatus,
academicYrSchol.donationActiveFlag donationActiveFlag,
academicYrSchol.academicYrScholMaxAmount academicYrScholMaxAmount,
academicYrSchol.academicYrScholTotalPaidAmount academicYrScholTotalPaidAmount,
academicYrSchol.academicYrScholTotalPaidAmountToInstitute academicYrScholTotalPaidAmountToInstitute,
academicYrSchol.academicYrScholTotalPaidAmountToStudent academicYrScholTotalPaidAmountToStudent,
academicYrSchol.academicYrScholTotalBalance academicYrScholTotalBalance,
academicYrSchol.currencyId currencyId,
academicYrSchol.academicYrScholRemarks academicYrScholRemarks,

comms.id commId,
dvsch.value beneficiaryTypeValue,
comms.commSchdIdSchol commSchdIdSchol, 
comms.commFrequencyValueId commFrequencyValueId,
comms.commIdSchol commIdSchol,
comms.commPurpose commPurpose,
comms.commSchdAmountSchol commSchdAmountSchol,
comms.batchNo commBatchNo,
comms.currencyId commCurrencyId,
comms.commDueDateSchol,
comms.commRemarksSchol,
comms.academicYrId commacAdemicYrId,
comms.academicYrSessionId commAcademicYrSessionId,
comms.balanceAmtStatus commBalanceAmtStatus,
comms.commPrnFlag commPrnFlag,
comms.commPrnPaidFlag commPrnPaidFlag,
comms.batchNo   commsbatchNo,

schPrnView.prnHdrId prnHdrId,
schPrnView.prnHeaderGenId prnHeaderGenId,
schPrnView.prnHeaderType prnHeaderType,
schPrnView.prnHeaderDate prnHeaderDate,
schPrnView.prnHeaderScholarshipTypeValueId prnHeaderScholarshipTypeValueId,
schPrnView.prnHeaderBookedUnder prnHeaderBookedUnder,
schPrnView.prnHeaderDonorId prnHeaderDonorId,
schPrnView.prnHeaderDonationId prnHeaderDonationId,
schPrnView.prnHeaderbatchNo prnHeaderbatchNo,
schPrnView.prnHeaderacademicYr prnHeaderacademicYr,
schPrnView.prnHeaderTotalPrnAmount prnHeaderTotalPrnAmount,
schPrnView.prnHeaderPrnPaymentMode prnHeaderPrnPaymentMode,
schPrnView.prnHeaderPrnPaymentRemarks prnHeaderPrnPaymentRemarks,
schPrnView.prnDocFileName   prnDocFileName,
schPrnView.transactionNarration transactionNarration, 
schPrnView.budgetHeadGroup budgetHeadGroup,
schPrnView.budgetHead budgetHead,

schPrnView.prnDtlsid prnDtlsid,
schPrnView.schPrnDetailsCostCenter schPrnDetailsCostCenter,
schPrnView.schPrnDetailscostCategory schPrnDetailscostCategory,
schPrnView.schPrnDetailsUserId schPrnDetailsUserId,
schPrnView.schPrnDetailsPrnPurpose schPrnDetailsPrnPurpose,
schPrnView.schPrnDetailsTotalPurposeAmount schPrnDetailsTotalPurposeAmount,
schPrnView.schPrnDetailsprnAmount schPrnDetailsprnAmount,
schPrnView.schPrnDetailsprnDueDate schPrnDetailsprnDueDate,
schPrnView.schPrnDetailsprnPreiod schPrnDetailsprnPreiod,
schPrnView.schPrnDetailsPrnBankAcNo schPrnDetailsPrnBankAcNo,
schPrnView.schPrnDetailsPrnBankAcHolderName schPrnDetailsPrnBankAcHolderName,
schPrnView.schPrnDetailsPrnBankName schPrnDetailsPrnBankName,
schPrnView.schPrnDetailsPrnBankBranchName schPrnDetailsPrnBankBranchName,
schPrnView.schPrnDetailsPrnBankIFSC schPrnDetailsPrnBankIFSC,
schPrnView.schPrnDetailsPrnPaymentStatus schPrnDetailsPrnPaymentStatus,
schPrnView.schPrnDetailsCommId schPrnDetailsCommId,
schPrnView.totalFeesForYear     totalFeesForYear,
schPrnView.commDuration commDuration,

fm.familyMemberBank     familyMemberBank,
fm.familyMemberBankName familyMemberBankName,
fm.familyMemberBankACNo familyMemberBankACNo,
fm.familyMemberIFSCode  familyMemberIFSCode,
fm.familyMembersBankBenfName familyMembersBankBenfName,
fm.familyMemberPANCard  familyMemberPANCard,
fm.id                   beneficiaryValueId,

ogs.organizationContactName  organizationContactName,
ogs.organizationBeneficiaryName organizationBeneficiaryName,
ogs.organizationBankName     organizationBankName,
ogs.organizationBankAc       organizationBankAc,
ogs.organizationBankIfscCode organizationBankIfscCode,
ogs.id                       instituteBrnfId

FROM applicationDetails AS app,scholarship 
LEFT OUTER JOIN institute    AS ins ON scholarship.selectedForInstituteId      = ins.id
LEFT OUTER JOIN domainName   AS dn  ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv  ON scholarship.selectedForCourseValueId    = dv.id
LEFT OUTER JOIN familyMembers AS fm ON scholarship.studentBenIeficiaryId    = fm.id
LEFT OUTER JOIN organizations AS ogs ON scholarship.institutePartnerId = ogs.id,
commintmentScheduleSchol AS comms LEFT OUTER JOIN schPrnView ON comms.id = schPrnView.schPrnDetailsCommId
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
-- JOIN commintmentScheduleSchol AS comms
JOIN domainValues AS dvsch
JOIN applicationSession AS apsay
WHERE app.id = scholarship.applicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND apsay.id = academicYrSchol.academicYrSessionId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id
AND comms.academicYrId = academicYrSchol.id
AND comms.beneficiaryTypeValueId = dvsch.id
UNION ALL SELECT
app.id appDetailsId,
app.schApplicationId schApplicationId,
app.appIdShow appIdShow,
app.applicationType applicationType,
app.scholarshipTypeValueId scholarshipTypeValueId,
app.scholarshipType scholarshipType,
app.mailStatus mailStatus,

app.userId userId,

app.sessionId sessionId,
aps.sessionName sessionName,
apsay.id apsaySessionId,
apsay.sessionName apsaySessionName,
aps.batchNo apsBatchNo,
aps.batchNoSr2 apsBatchNoSr2,

aps.start_date sessionAppStartDate,
aps.end_date sessionAppEndDate,
aps.currentSession currentSession,
aps.closed sessionClosed,
aps.fy_start_date sessionFyStartDate,
aps.fy_end_date sessionFyEndDate,

app.applicantNameF applicantNameF,
app.applicantNameM applicantNameM,
app.applicantNameL aplicantNameL,
app.applicantFatherName applicantFatherName,
app.applicantDOB   applicantDOB,
app.applicantGender applicantGender,
app.applicantLeprosyAffectedSelf applicantLeprosyAffectedSelf,
app.applicantLeprosyAffectedFather applicantLeprosyAffectedFather,
app.applicantLeprosyAffectedMother applicantLeprosyAffectedMother,
app.applicantDisablitySelf applicantDisablitySelf,
app.applicantDisablityFather applicantDisablityFather,
app.applicantDisablityMother applicantDisablityMother,
app.applicantContactNoSelf applicantContactNoSelf,
app.applicantContactNoGuardian applicantContactNoGuardian,
app.applicantEmailId applicantEmailId,

pad.addressAddln1 addressAddln1,
pad.addressAddln2 addressAddln2,
pad.addressCity addressCity,
pad.addressDistprov addressDistprov,
pad.addressState addressState,
pad.addressPinzip addressPinzip,

app.hasAdmissionLetter hasAdmissionLetter,
app.appStatus appStatus,
app.appStatusSeqNo appStatusSeqNo,
scholarship.id scholId,
scholarship.courseDurationInYears scholDuration,
scholarship.courseStartDate  scholStartDate,
scholarship.courseEndDate  scholEndDate,

ins.instituteName instituteName,
ins.id insId,
ins.instituteAddressId instituteAddressId,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,
scholarship.costCentre costCentre,

dv.value domainValue,
dn.description domainName,

aps.sessionName startSessionName,
scholarship.schStatus schStatus,

academicYrSchol.id	academicYrId,
academicYrSchol.scholarshipId scholarshipId,
academicYrSchol.academicYrDonationId,
academicYrSchol.academicYrSessionId academicYrSessionId,
academicYrSchol.academicYrStartDate academicYrStartDate,
academicYrSchol.academicYrEndDate academicYrEndDate,
academicYrSchol.academicYrDonationStatus academicYrDonationStatus,
academicYrSchol.donationActiveFlag donationActiveFlag,
academicYrSchol.academicYrScholMaxAmount academicYrScholMaxAmount,
academicYrSchol.academicYrScholTotalPaidAmount academicYrScholTotalPaidAmount,
academicYrSchol.academicYrScholTotalPaidAmountToInstitute academicYrScholTotalPaidAmountToInstitute,
academicYrSchol.academicYrScholTotalPaidAmountToStudent academicYrScholTotalPaidAmountToStudent,
academicYrSchol.academicYrScholTotalBalance academicYrScholTotalBalance,
academicYrSchol.currencyId currencyId,
academicYrSchol.academicYrScholRemarks academicYrScholRemarks,

comms.id commId,
dvsch.value beneficiaryTypeValue,
comms.commSchdIdSchol commSchdIdSchol, 
comms.commFrequencyValueId commFrequencyValueId,
comms.commIdSchol commIdSchol,
comms.commPurpose commPurpose,
comms.commSchdAmountSchol commSchdAmountSchol,
comms.batchNo commBatchNo,
comms.currencyId commCurrencyId,
comms.commDueDateSchol,
comms.commRemarksSchol,
comms.academicYrId commacAdemicYrId,
comms.academicYrSessionId commAcademicYrSessionId,
comms.balanceAmtStatus commBalanceAmtStatus,
comms.commPrnFlag commPrnFlag,
comms.commPrnPaidFlag commPrnPaidFlag,
comms.batchNo   commsbatchNo,

schPrnView.prnHdrId prnHdrId,
schPrnView.prnHeaderGenId prnHeaderGenId,
schPrnView.prnHeaderType prnHeaderType,
schPrnView.prnHeaderDate prnHeaderDate,
schPrnView.prnHeaderScholarshipTypeValueId prnHeaderScholarshipTypeValueId,
schPrnView.prnHeaderBookedUnder prnHeaderBookedUnder,
schPrnView.prnHeaderDonorId prnHeaderDonorId,
schPrnView.prnHeaderDonationId prnHeaderDonationId,
schPrnView.prnHeaderbatchNo prnHeaderbatchNo,
schPrnView.prnHeaderacademicYr prnHeaderacademicYr,
schPrnView.prnHeaderTotalPrnAmount prnHeaderTotalPrnAmount,
schPrnView.prnHeaderPrnPaymentMode prnHeaderPrnPaymentMode,
schPrnView.prnHeaderPrnPaymentRemarks prnHeaderPrnPaymentRemarks,
schPrnView.prnDocFileName   prnDocFileName,
schPrnView.transactionNarration transactionNarration, 
schPrnView.budgetHeadGroup budgetHeadGroup,
schPrnView.budgetHead budgetHead,

schPrnView.prnDtlsid prnDtlsid,
schPrnView.schPrnDetailsCostCenter schPrnDetailsCostCenter,
schPrnView.schPrnDetailscostCategory schPrnDetailscostCategory,
schPrnView.schPrnDetailsUserId schPrnDetailsUserId,
schPrnView.schPrnDetailsPrnPurpose schPrnDetailsPrnPurpose,
schPrnView.schPrnDetailsTotalPurposeAmount schPrnDetailsTotalPurposeAmount,
schPrnView.schPrnDetailsprnAmount schPrnDetailsprnAmount,
schPrnView.schPrnDetailsprnDueDate schPrnDetailsprnDueDate,
schPrnView.schPrnDetailsprnPreiod schPrnDetailsprnPreiod,
schPrnView.schPrnDetailsPrnBankAcNo schPrnDetailsPrnBankAcNo,
schPrnView.schPrnDetailsPrnBankAcHolderName schPrnDetailsPrnBankAcHolderName,
schPrnView.schPrnDetailsPrnBankName schPrnDetailsPrnBankName,
schPrnView.schPrnDetailsPrnBankBranchName schPrnDetailsPrnBankBranchName,
schPrnView.schPrnDetailsPrnBankIFSC schPrnDetailsPrnBankIFSC,
schPrnView.schPrnDetailsPrnPaymentStatus schPrnDetailsPrnPaymentStatus,
schPrnView.schPrnDetailsCommId schPrnDetailsCommId,
schPrnView.totalFeesForYear     totalFeesForYear,
schPrnView.commDuration commDuration,

fm.familyMemberBank     familyMemberBank,
fm.familyMemberBankName familyMemberBankName,
fm.familyMemberBankACNo familyMemberBankACNo,
fm.familyMemberIFSCode  familyMemberIFSCode,
fm.familyMembersBankBenfName familyMembersBankBenfName,
fm.familyMemberPANCard  familyMemberPANCard,
fm.id                   beneficiaryValueId,

ogs.organizationContactName  organizationContactName,
ogs.organizationBeneficiaryName organizationBeneficiaryName,
ogs.organizationBankName     organizationBankName,
ogs.organizationBankAc       organizationBankAc,
ogs.organizationBankIfscCode organizationBankIfscCode,
ogs.id                       instituteBrnfId

FROM offlineApplicationDetails AS app ,scholarship 
LEFT OUTER JOIN institute    AS ins ON scholarship.selectedForInstituteId      = ins.id
LEFT OUTER JOIN domainName   AS dn  ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv  ON scholarship.selectedForCourseValueId    = dv.id
LEFT OUTER JOIN familyMembers AS fm  ON scholarship.studentBenIeficiaryId    = fm.id
LEFT OUTER JOIN organizations AS ogs ON scholarship.institutePartnerId = ogs.id,
commintmentScheduleSchol AS comms LEFT OUTER JOIN schPrnView ON comms.id = schPrnView.schPrnDetailsCommId
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
-- JOIN commintmentScheduleSchol AS comms
JOIN domainValues AS dvsch
JOIN applicationSession AS apsay
WHERE app.id = scholarship.offlineApplicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND apsay.id = academicYrSchol.academicYrSessionId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id
AND comms.academicYrId = academicYrSchol.id
AND comms.beneficiaryTypeValueId = dvsch.id;