/*Allocate Scholoarship view*/
DROP VIEW IF EXISTS allocateScholarshipView;
CREATE VIEW allocateScholarshipView AS SELECT
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
aps.start_date sessionAppStartDate,
aps.end_date sessionAppEndDate,
aps.currentSession currentSession,
aps.closed sessionClosed,
aps.fy_start_date sessionFyStartDate,
aps.fy_end_date sessionFyEndDate,
aps.batchNo apsBatchNo,
aps.batchNoSr2 apsBatchNoSr2,

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

insSlFor.instituteName instituteNameSF,
insSlFor.id insIdSF,
insSlFor.instituteAddressId instituteAddressIdSF,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,
scholarship.costCentre costCentre,
scholarship.studentBenIeficiaryId studentBenIeficiaryId,
scholarship.selectedForInstituteId selectedForInstituteId,
scholarship.institutePartnerId institutePartnerId,

org.organizationId organizationId,

dv.value domainValue,
dn.description domainName,

aps.sessionName startSessionName,
scholarship.schStatus schStatus
FROM scholarship 
LEFT OUTER JOIN institute AS insSlFor ON scholarship.selectedForInstituteId  = insSlFor.id
LEFT OUTER JOIN organizations AS org ON scholarship.institutePartnerId = org.id
,applicationDetails AS app
LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
JOIN portalAddress AS pad
JOIN applicationSession AS aps
WHERE app.id = scholarship.applicationId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id
UNION ALL
SELECT
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
aps.start_date sessionAppStartDate,
aps.end_date sessionAppEndDate,
aps.currentSession currentSession,
aps.closed sessionClosed,
aps.fy_start_date sessionFyStartDate,
aps.fy_end_date sessionFyEndDate,
aps.batchNo apsBatchNo,
aps.batchNoSr2 apsBatchNoSr2,

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

insSlFor.instituteName instituteNameSF,
insSlFor.id insIdSF,
insSlFor.instituteAddressId instituteAddressIdSF,

scholarship.offlineApplicationId offlineApplicationId,
scholarship.applicationId applicationId,
scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
scholarship.schMaxAmountContract  schMaxAmountContract,
scholarship.changeCourse changeCourse,
scholarship.changeIns changeIns,
scholarship.costCentre costCentre,
scholarship.studentBenIeficiaryId studentBenIeficiaryId,
scholarship.selectedForInstituteId selectedForInstituteId,
scholarship.institutePartnerId institutePartnerId,

org.organizationId organizationId,

dv.value domainValue,
dn.description domainName,

aps.sessionName startSessionName,
scholarship.schStatus schStatus
FROM scholarship  
LEFT OUTER JOIN institute AS insSlFor ON scholarship.selectedForInstituteId  = insSlFor.id 
LEFT OUTER JOIN organizations AS org ON scholarship.institutePartnerId = org.id
, offlineApplicationDetails AS app
LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
JOIN portalAddress AS pad
JOIN applicationSession AS aps
WHERE app.id = scholarship.offlineApplicationId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id;