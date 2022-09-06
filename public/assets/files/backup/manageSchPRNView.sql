/** scholarship schedule view old**/
DROP VIEW scholarshipScheduleView;

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

ins.instituteName instituteName,
ins.id insId,
ins.instituteAddressId instituteAddressId,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,

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


prnHdr.id prnHeaderPrimaryKeyId,
prnHdr.prnId prnHeaderGenId,
prnHdr.prnType prnHeaderType,
prnHdr.prnDate prnHeaderDate,
prnHdr.prnScholarshipTypeValueId prnHeaderScholarshipTypeValueId,
prnHdr.prnBookedUnder prnHeaderBookedUnder,
prnHdr.prnDonorId prnHeaderDonorId,
prnHdr.prnDonationId prnHeaderDonationId,
prnHdr.batchNo prnHeaderbatchNo,
prnHdr.academicYr prnHeaderacademicYr,
prnHdr.totalPrnAmount prnHeaderTotalPrnAmount,
prnHdr.prnPaymentMode prnHeaderPrnPaymentMode,
prnHdr.prnPaymentRemarks prnHeaderPrnPaymentRemarks,

prnDtls.id schPrnDetailsPrimaryKeyId,
prnDtls.costCenter schPrnDetailsCostCenter,
prnDtls.costCategory schPrnDetailscostCategory,
prnDtls.userId schPrnDetailsUserId,
prnDtls.prnPurpose schPrnDetailsPrnPurpose,
prnDtls.totalPurposeAmount schPrnDetailsTotalPurposeAmount,
prnDtls.prnAmount schPrnDetailsprnAmount,
prnDtls.prnDueDate schPrnDetailsprnDueDate,
prnDtls.prnPreiod schPrnDetailsprnPreiod,
prnDtls.prnBankAcNo schPrnDetailsPrnBankAcNo,
prnDtls.prnBankAcHolderName schPrnDetailsPrnBankAcHolderName,
prnDtls.prnBankName schPrnDetailsPrnBankName,
prnDtls.prnBankBranchName schPrnDetailsPrnBankBranchName,
prnDtls.prnBankIFSC schPrnDetailsPrnBankIFSC,
prnDtls.prnPaymentStatus schPrnDetailsPrnPaymentStatus
prnDtls.schPrnDetailsCommId schPrnDetailsCommId

FROM applicationDetails AS app ,scholarship
LEFT OUTER JOIN institute    AS ins ON scholarship.selectedForInstituteId      = ins.id
LEFT OUTER JOIN domainName   AS dn  ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv  ON scholarship.selectedForCourseValueId    = dv.id,
commintmentScheduleSchol AS prnComms LEFT OUTER JOIN schPrnHeader AS prnHdr ON prnComms.prnId = prnHdr.id,
schPrnHeader AS prnHdr2 LEFT OUTER JOIN schPrnDetails AS prnDtls ON prnHdr2.id = prnDtls.schPrnHeaderId
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
JOIN commintmentScheduleSchol AS comms
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

ins.instituteName instituteName,
ins.id insId,
ins.instituteAddressId instituteAddressId,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,

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

prnHdr.id prnHeaderPrimaryKeyId,
prnHdr.prnId prnHeaderGenId,
prnHdr.prnType prnHeaderType,
prnHdr.prnDate prnHeaderDate,
prnHdr.prnScholarshipTypeValueId prnHeaderScholarshipTypeValueId,
prnHdr.prnBookedUnder prnHeaderBookedUnder,
prnHdr.prnDonorId prnHeaderDonorId,
prnHdr.prnDonationId prnHeaderDonationId,
prnHdr.batchNo prnHeaderbatchNo,
prnHdr.academicYr prnHeaderacademicYr,
prnHdr.totalPrnAmount prnHeaderTotalPrnAmount,
prnHdr.prnPaymentMode prnHeaderPrnPaymentMode,
prnHdr.prnPaymentRemarks prnHeaderPrnPaymentRemarks,

prnDtls.id schPrnDetailsPrimaryKeyId,
prnDtls.costCenter schPrnDetailsCostCenter,
prnDtls.costCategory schPrnDetailscostCategory,
prnDtls.userId schPrnDetailsUserId,
prnDtls.prnPurpose schPrnDetailsPrnPurpose,
prnDtls.totalPurposeAmount schPrnDetailsTotalPurposeAmount,
prnDtls.prnAmount schPrnDetailsprnAmount,
prnDtls.prnDueDate schPrnDetailsprnDueDate,
prnDtls.prnPreiod schPrnDetailsprnPreiod,
prnDtls.prnBankAcNo schPrnDetailsPrnBankAcNo,
prnDtls.prnBankAcHolderName schPrnDetailsPrnBankAcHolderName,
prnDtls.prnBankName schPrnDetailsPrnBankName,
prnDtls.prnBankBranchName schPrnDetailsPrnBankBranchName,
prnDtls.prnBankIFSC schPrnDetailsPrnBankIFSC,
prnDtls.prnPaymentStatus schPrnDetailsPrnPaymentStatus


FROM offlineApplicationDetails AS app ,scholarship 
LEFT OUTER JOIN institute    AS ins ON scholarship.selectedForInstituteId      = ins.id
LEFT OUTER JOIN domainName   AS dn  ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv  ON scholarship.selectedForCourseValueId    = dv.id,
commintmentScheduleSchol AS prnComms LEFT OUTER JOIN schPrnHeader AS prnHdr ON prnComms.prnId = prnHdr.id,
schPrnHeader AS prnHdr2 LEFT OUTER JOIN schPrnDetails AS prnDtls ON prnHdr2.id = prnDtls.schPrnHeaderId
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
JOIN commintmentScheduleSchol AS comms
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