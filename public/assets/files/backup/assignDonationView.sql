/** Assign Donation View-2 **/
DROP VIEW assignDonationView;
CREATE VIEW assignDonationView AS SELECT
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
academicYrSchol.academicYrScholRemarks academicYrScholRemarks
FROM applicationDetails AS app ,scholarship 
LEFT OUTER JOIN institute    AS ins ON scholarship.selectedForInstituteId  = ins.id
LEFT OUTER JOIN domainName   AS dn  ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv  ON scholarship.selectedForCourseValueId = dv.id
/*
FROM scholarship ,applicationDetails AS app
LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
*/
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
JOIN applicationSession AS apsay
WHERE app.id = scholarship.applicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND apsay.id = academicYrSchol.academicYrSessionId
AND aps.id = app.sessionId
/*
AND aps.id = app.sessionId
WHERE app.id = scholarship.applicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND aps.id = academicYrSchol.academicYrSessionId
*/
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id
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
academicYrSchol.academicYrScholRemarks academicYrScholRemarks
/* 
selectedForInstituteId
selectedForCourseLvlValueId
selectedForCourseValueId
*/
FROM offlineApplicationDetails AS app ,scholarship 
LEFT OUTER JOIN institute AS ins ON scholarship.selectedForInstituteId      = ins.id
LEFT OUTER JOIN domainName AS dn ON scholarship.selectedForCourseLvlValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON scholarship.selectedForCourseValueId  = dv.id
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
JOIN applicationSession AS apsay
WHERE app.id = scholarship.offlineApplicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND apsay.id = academicYrSchol.academicYrSessionId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id;