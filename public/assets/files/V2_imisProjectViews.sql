/* Media View */
DROP VIEW IF EXISTS mediaView;
CREATE VIEW mediaView AS SELECT cd.id mediaPrimaryKeyId,ac.id activityPrimaryKeyId, ac.activityProgramNameId programId, pn.programName programName, ac.activityCategoryId categoryId,acc.activityCategory categoryName,ac.activitySubCategoryId subCategoryId,acsc.activitySubCategory subCategoryName,cd.cnaDocumentsTypes mediaTypes,cd.cnaDocumentsName mediaName,cd.cnaDocumentsDescription mediaDescription,cd.cnaDocumentsFile mediaFile,cd.cnaDocumentsVideoId mediaVideoId,cd.cnaDocumentsGalleryFlag mediaGalleryFlag,cd.cnaDocumentsVideoStatus mediaVideoStatus,cd.cnaDocumentsVideoWatchLink mediaVideoWatchLink,
cd.cnaDocumentsDate mediaDate,cd.cnaDocumentsTitle mediaTitle,cd.fileSize,cd.userName mediaUserName,cd.adminUserId mediaUserId,cd.activityId mediaActivityId,
cd.created_at mediaCreatedAt,cd.updated_at mediaUpdateAt ,cd.cnaDocumentsId mediaId,ac.activityId mediaActivityGenId,
ac.activityDate activityDate,ac.activityLocation activityLocation,ac.activityDistrict activityDistrict,ac.activityState activityState, ac.activityDescription activityDescription FROM cnaDocuments AS cd, activity AS ac, activityProgramName AS pn,activityCategory AS acc, activitySubCategory as acsc WHERE ac.activityProgramNameId = pn.id AND cd.activityId= ac.id AND acc.id = ac.activityCategoryId AND acsc.id = ac.activitySubCategoryId;
/* Donor View */
DROP VIEW IF EXISTS donorView;
CREATE VIEW donorView AS SELECT 
d.id donorPrimaryKeyId,
ad.id addressPrimaryKeyId,
d.donorId donorGenId,
d.donorType donorType,
d.donorFname donorFirstName,
d.donorLname donorLastName,
d.donorOrgname organizationName,
d.donorContactname contactPerson,
d.donorEmail donorEmail,
d.donorMobileNo contactNo,
d.donorPantan PanNo,
d.donorPantan tanNo,
d.donorOrgPan orgPanNo,
d.donorGst gstNo,
d.donorDefaultCurr donorCurrency,
d.donorStatus donorStatus,
d.indDonorDob dateOfBirth,
d.indDonorGender gender,
d.indDonorPassport donorPassportNo,
d.indDonorTaxId taxId,
ad.addressAddln1 addressLine1,
ad.addressAddln2 addressLine2,
ad.addressCity city,
ad.addressDistprov district,
ad.addressState addressState,
ad.addressPinzip pincode,
ad.addressCountry country
FROM donors AS d, address AS ad WHERE d.donorAddressId = ad.id;

/* Donation View */
DROP VIEW IF EXISTS donationView;
CREATE VIEW donationView AS SELECT dn.id donationPrimaryKeyId,do.id donorPrimaryKeyId, ad.id addressPrimaryKeyid, pr.id programPrimaryKeyId,cur.id currencyPrimaryKeyId,pro.id proposalPrimaryKeyId, dn.donationlId donationGenId,dn.purpose purpose, dn.donationType donationType,dn.commitmentType commitmentType,dn.effectiveDate effectiveDate,do.donorFname donorFirstName,do.donorLname donorLastName,do.donorOrgname organizationsName,pr.programName programName,pro.proposalTitle proposalTitle,pro.proposalAgreementFilename proposalFileName, dn.unit unit, cur.code currencyCode,dn.amount amount,dn.balanceAmount balanceAmount,dn.donationReceivedStatus donationReceivedStatus,dn.created_at created_at,dn.updated_at updated_at,pr.programCode programCode,pro.proposalCode proposalCode,do.donorType donorType,ad.addressAddln1 addressline1,ad.addressAddln2 addressLine2,ad.addressCity addressCity,ad.addressDistprov district,ad.addressState state,ad.addressPinzip pincode,ad.addressCountry country ,do.donorId donorGenId 
FROM donations AS dn
LEFT OUTER JOIN proposal AS pro ON dn.proposalId = pro.id
JOIN donors AS do
JOIN address AS ad 
JOIN programs AS pr
JOIN currencies AS cur
WHERE dn.donorId = do.id 
AND do.donorAddressId = ad.id 
AND dn.programId = pr.id 
AND dn.currencyId = cur.id;
/* Colony View */
DROP VIEW IF EXISTS colonyView;
CREATE VIEW colonyView AS SELECT 

cl.id colonyPrimaryKeyId,
ad.id addressPrimaryKeyId,
fm.id familyMembersPrimaryKeyId,

em.id employeePrimaryKeyId,
em.employeeId employeeGenid,

cl.colonyId colonyGenId,
cl.colonyName colonyName,
cl.colonyContactNo colonyContactNo,
cl.colonyContactEmailId emailId,
cl.colonyCount count, 
ad.addressAddln1 addressLine1,
ad.addressAddln2 addressLine2,
ad.addressCity addressCity,
ad.addressDistprov district,
ad.addressState state,
ad.addressPinzip pinCode,
ad.addressCountry country,

fm.familyMemberFName  colonyLeadFirstName,
fm.familyMemberMName  colonyLeadMiddleName, 
fm.familyMemberLName  colonyLeadLastName, 

fmy.familyMemberFName  stateHeadFirstName,
fmy.familyMemberMName stateHeadMiddleName, 
fmy.familyMemberLName  stateHeadLastName,

em.employeeFirstName empFirstName,
em.employeeMiddleName empMiddleName,
em.employeeLastName empLastName,

cl.colonyLead leadId,
cl.colonyStateHeadName stateHeadId,
cl.colonyZPCName ZPCId 

FROM colony AS cl 
LEFT OUTER JOIN familyMembers AS fm  ON cl.colonyLead = fm.id
LEFT OUTER JOIN familyMembers AS fmy ON cl.colonyStateHeadName = fmy.id
LEFT OUTER JOIN employee AS em ON cl.colonyZPCName = em.id
JOIN address AS ad WHERE ad.id = cl.colonyAddressId;

/* Partner Course View */
DROP VIEW IF EXISTS partnerCourseView;
CREATE VIEW partnerCourseView AS SELECT pc.id partnerCoursePrimaryId,o.id organizationPrimaryKeyId,
pc.partnerCourseId courseGenId,pc.partnerCourseDesc courseDesc,pc.partnerCourseDuration courseDuration,pc.partnerCourseStartDate courseStartDate,pc.partnerCourseEndDate courseEndDate,pc.partnerCourseObjectives courseObjectives,pc.partnerCourseOutcome courseOutcome,pc.partnerCourseDegree courseDegree,pc.partnerCourseFeeAmt feeAmt,pc.partnerCourseAllocate courseAllocate,o.organizationType orzType,o.organizationName orzName,o.organizationId orzGenId,o.organizationBeneficiaryName orgBenfName,o.organizationContactName orgContName,o.organizationContactEmail emailId FROM organizations AS o, partnerCourses AS pc WHERE pc.organizationId = o.id;
/*Partner training view */
DROP VIEW IF EXISTS partnerTrainingView;
CREATE VIEW partnerTrainingView AS SELECT pt.partnerTrainingId trgnGenId,pt.id trgnPrimaryKeyId,pt.partnerTrainingDesc trgnDesc,pt.partnerTrainingDuration trgnDuration,pt.partnerTrainingStartDate startDate,pt.partnerTrainingEndDate endDate,pt.partnerTrainingObjectives objectives,pt.partnerTrainingOutcome outcome,pt.partnerTrainingCertification certification,pt.partnerTrainingFeesType feesType,pt.partnerTrainingFeeAmt feeAmt,pt.partnerTrainingAllocate trgnAllocate, o.id organizationPrimaryKeyId,o.organizationType orzType,o.organizationName orzName,o.organizationId orzGenId,o.organizationBeneficiaryName orgBenfName,o.organizationContactName orgContName,o.organizationContactEmail emailId
FROM organizations AS o, partnerTrainings AS pt WHERE pt.organizationId = o.id;
/* Family view */
DROP VIEW IF EXISTS familyView;
CREATE VIEW familyView AS 
SELECT fm.id familyPrimaryKeyId,
cl.id colonyPrimaryKeyId,
fm.familyId familyGenId,
fm.familyFName firstName,
fm.familyMName middleName,
fm.familyLName lastName,
fm.familyDOB dateOfBirth,
fm.familyGender gender,
fm.familyHeadId headId,
fm.familyHouseHoldNo houseNo,
fm.familyContactNo contactNo,
fm.familyEmailId emailId,
fm.familyToiletAvailability toiletAvl,
fm.familyToiletType toiletType,
fm.familyToiletFacilities toiletfacilities,
fm.familyDrinkingwater waterAvl,
fm.familyElectricalConnection electricalconnAvl,
fm.familyGasConnection gasConnAvl,
fm.familyLandPatta landPatta,
fm.familyOtherEntitlementStatus entitlementSts,
fm.familyTOH typeOfHouse,
fm.familyDrinkingwaterSource waterSource,
fm.familyDrinkingwaterCheckOut reasonFor,
fm.familyElectricalConnectionType electicalConnType,
fm.familyRationCard rationCardAvl,
fm.familyRationCardType rtnCardType,

cl.colonyName colonyName,
cl.colonyId colonyGenId 

FROM family AS fm, colony AS cl WHERE fm.colonyId = cl.id;
/* loc address view */

DROP VIEW IF EXISTS partnerView;
DROP VIEW IF EXISTS locAddressView;
CREATE VIEW locAddressView  AS SELECT lo.id locationPrimaryKeyId,lo.organizationId orgId,
lo.locationId AS locationGenId,lo.locationName locationName,lo.locationType locationType,a.addressAddln1 addressLine1,
a.addressAddln2 addressLine2,a.addressCity addressCity,a.addressDistprov district,
a.addressState state,a.addressPinzip pinCode FROM locations AS lo JOIN address AS a WHERE lo.addressId = a.id 
AND lo.locationType = 'Head Office';
/*partner View */
CREATE VIEW partnerView AS SELECT o.id organizationPrimaryId,
o.organizationId orgGenId,o.organizationType orgType,o.organizationShortName organizationShortName,
o.organizationName orgName,o.organizationBeneficiaryName orgBenfName,
o.organizationContactName orgContName,o.organizationContactEmail orgcontEmail,
o.organizationContactNo orgContNo,o.organizationPanNo orgPanNo,
o.organizationTanNo orgTanNo,o.organizationGstNo orgGstNo,
o.organizationBankName bankName,o.organizationBankAc bankAcNo,
o.organizationBankIfscCode ifscCode,o.organizationStatus orgStatus,
lav.addressLine1 addLn1,lav.addressLine2 addLn2,lav.addressCity addressCity,
lav.district district,lav.state state,lav.pinCode pinCode,lav.locationType locationType 
FROM organizations AS o LEFT JOIN locAddressView lav ON lav.orgId = o.id WHERE o.organizationType NOT IN('SELF');

/* ins with address view */
DROP VIEW IF EXISTS manageScholarshipView;
DROP VIEW IF EXISTS instituteWithAddress;

CREATE VIEW instituteWithAddress AS SELECT
ins2.id instituteId,
ins2.instituteName instituteName,
pad2.addressAddln1 addressAddln1,
pad2.addressAddln2 addressAddln2,
pad2.addressCity addressCity,
pad2.addressDistprov addressDistprov,
pad2.addressState addressState,
pad2.addressPinzip addressPinzip,
pad2.addressCountry addressCountry
FROM institute AS ins2,portalAddress AS pad2
WHERE ins2.instituteAddressId =  pad2.id;

/* manage scholarship view */
CREATE VIEW manageScholarshipView AS SELECT
app.id appDetailsId,
app.schApplicationId schApplicationId,
app.appIdShow appIdShow,
app.applicationType applicationType,
app.scholarshipTypeValueId scholarshipTypeValueId,
app.scholarshipType sholarshipType,
app.userId userId,
app.sessionId sessionId,
applicationSession.sessionName sessionName,
applicationSession.start_date sessionAppStartDate,
applicationSession.end_date sessionAppEndDate,
applicationSession.currentSession currentSession,
applicationSession.closed sessionClosed,
applicationSession.fy_start_date sessionFyStartDate,
applicationSession.fy_end_date sessionFyEndDate,
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
ins.instituteId instituteId,
ins.instituteName insName,
ins.addressAddln1 insAddressAddln1,
ins.addressAddln2 insAddressAddln2,
ins.addressCity insAddressCity,
ins.addressDistprov insAddressDistprov,
ins.addressState insAddressState,
ins.addressPinzip insAddressPinzip,
ins.addressCountry insAddressCountry,
/*
pad.addressCountry addressCountry,
app.appSchduleId appSchduleId,
app.courseLevelValueId courseLevelValueId,
app.courseNameValueId courseNameValueId,
app.courseLevelValue courseLevelValue,
app.courseNameValue courseNameValue,
*/
app.financialYear financialYear,
app.appStatus appStatus,
app.keySubMarksAvgPercentage keySubMarksAvgPercentage,
app.keySubMarksExamLevelValueId keySubMarksExamLevelValueId,
domainValuesMarksLevel.value marksLevelValue,
app.appStatusSeqNo appStatusSeqNo,
app.mailStatus mailStatus,
scholarship.id scholId,
scholarship.selectedForCourseLvlValueId selectedForCourseLvlValueId,
domainName.description courseLevel,
scholarship.selectedForCourseValueId selectedForCourseValueId,
domainValues.value courseName,
scholarship.courseDurationInYears courseDurationInYears,
scholarship.startSession startSession,
aps.sessionName startSessionName,
scholarship.selectedForInstituteId selectedForInstituteId,
scholarship.maxInstituteAmt maxInstituteAmt,
scholarship.schStatus schStatus,
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
don.id donationId,
don.donationlId donationlId
FROM academicYrSchol
LEFT OUTER JOIN donations AS don ON academicYrSchol.academicYrDonationId = don.id
JOIN applicationDetails AS app
JOIN scholarship  
JOIN portalAddress AS pad
JOIN instituteWithAddress AS ins
JOIN domainName
JOIN domainValues
JOIN domainValues AS domainValuesMarksLevel
JOIN applicationSession
JOIN applicationSession AS aps
WHERE app.id = scholarship.applicationId
AND applicationSession.id = app.sessionId
AND app.keySubMarksExamLevelValueId = domainValuesMarksLevel.id
AND scholarship.id = academicYrSchol.scholarshipId
AND app.applicantAddressId = pad.id
AND scholarship.selectedForCourseLvlValueId = domainName.id
AND scholarship.selectedForCourseValueId = domainValues.id
AND scholarship.selectedForInstituteId = ins.instituteId
AND aps.id = scholarship.startSession
AND academicYrSchol.academicYrDonationStatus IN ('SCH-ALCTD','AL','SG','PI','DR');

/*Allocate Scholoarship view*/
/*This view revised replaced as below on 24th March 2022*/
-- DROP VIEW IF EXISTS allocateScholarshipView;
-- CREATE VIEW allocateScholarshipView AS SELECT
-- app.id appDetailsId,

-- app.schApplicationId schApplicationId,
-- app.appIdShow appIdShow,
-- app.applicationType applicationType,
-- app.scholarshipTypeValueId scholarshipTypeValueId,
-- app.scholarshipType scholarshipType,
-- app.mailStatus mailStatus,

-- app.userId userId,
-- app.sessionId sessionId,

-- aps.sessionName sessionName,
-- aps.start_date sessionAppStartDate,
-- aps.end_date sessionAppEndDate,
-- aps.currentSession currentSession,
-- aps.closed sessionClosed,
-- aps.fy_start_date sessionFyStartDate,
-- aps.fy_end_date sessionFyEndDate,
-- aps.batchNo apsBatchNo,
-- aps.batchNoSr2 apsBatchNoSr2,

-- app.applicantNameF applicantNameF,
-- app.applicantNameM applicantNameM,
-- app.applicantNameL aplicantNameL,
-- app.applicantDOB   applicantDOB,
-- app.applicantGender applicantGender,
-- app.applicantLeprosyAffectedSelf applicantLeprosyAffectedSelf,
-- app.applicantLeprosyAffectedFather applicantLeprosyAffectedFather,
-- app.applicantLeprosyAffectedMother applicantLeprosyAffectedMother,
-- app.applicantDisablitySelf applicantDisablitySelf,
-- app.applicantDisablityFather applicantDisablityFather,
-- app.applicantDisablityMother applicantDisablityMother,
-- app.applicantContactNoSelf applicantContactNoSelf,
-- app.applicantContactNoGuardian applicantContactNoGuardian,
-- app.applicantEmailId applicantEmailId,

-- pad.addressAddln1 addressAddln1,
-- pad.addressAddln2 addressAddln2,
-- pad.addressCity addressCity,
-- pad.addressDistprov addressDistprov,
-- pad.addressState addressState,
-- pad.addressPinzip addressPinzip,

-- app.hasAdmissionLetter hasAdmissionLetter,
-- app.appStatus appStatus,
-- app.appStatusSeqNo appStatusSeqNo,
-- scholarship.id scholId,

-- ins.instituteName instituteName,
-- ins.id insId,
-- ins.instituteAddressId instituteAddressId,

-- scholarship.offlineApplicationId offlineApplicationId,
-- scholarship.applicationId applicationId,
-- scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
-- scholarship.schMaxAmountContract  schMaxAmountContract,
-- scholarship.changeCourse changeCourse,
-- scholarship.changeIns changeIns,
-- scholarship.costCentre costCentre,
-- scholarship.studentBenIeficiaryId studentBenIeficiaryId,

-- dv.value domainValue,
-- dn.description domainName,

-- aps.sessionName startSessionName,
-- scholarship.schStatus schStatus
-- FROM scholarship ,applicationDetails AS app
-- LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
-- LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
-- LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
-- JOIN portalAddress AS pad
-- JOIN applicationSession AS aps
-- WHERE app.id = scholarship.applicationId
-- AND aps.id = app.sessionId
-- AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
-- AND app.applicantAddressId = pad.id
-- UNION ALL
-- SELECT
-- app.id appDetailsId,

-- app.schApplicationId schApplicationId,
-- app.appIdShow appIdShow,
-- app.applicationType applicationType,
-- app.scholarshipTypeValueId scholarshipTypeValueId,
-- app.scholarshipType scholarshipType,
-- app.mailStatus mailStatus,

-- app.userId userId,
-- app.sessionId sessionId,

-- aps.sessionName sessionName,
-- aps.start_date sessionAppStartDate,
-- aps.end_date sessionAppEndDate,
-- aps.currentSession currentSession,
-- aps.closed sessionClosed,
-- aps.fy_start_date sessionFyStartDate,
-- aps.fy_end_date sessionFyEndDate,
-- aps.batchNo apsBatchNo,
-- aps.batchNoSr2 apsBatchNoSr2,

-- app.applicantNameF applicantNameF,
-- app.applicantNameM applicantNameM,
-- app.applicantNameL aplicantNameL,
-- app.applicantDOB   applicantDOB,
-- app.applicantGender applicantGender,
-- app.applicantLeprosyAffectedSelf applicantLeprosyAffectedSelf,
-- app.applicantLeprosyAffectedFather applicantLeprosyAffectedFather,
-- app.applicantLeprosyAffectedMother applicantLeprosyAffectedMother,
-- app.applicantDisablitySelf applicantDisablitySelf,
-- app.applicantDisablityFather applicantDisablityFather,
-- app.applicantDisablityMother applicantDisablityMother,
-- app.applicantContactNoSelf applicantContactNoSelf,
-- app.applicantContactNoGuardian applicantContactNoGuardian,
-- app.applicantEmailId applicantEmailId,

-- pad.addressAddln1 addressAddln1,
-- pad.addressAddln2 addressAddln2,
-- pad.addressCity addressCity,
-- pad.addressDistprov addressDistprov,
-- pad.addressState addressState,
-- pad.addressPinzip addressPinzip,

-- app.hasAdmissionLetter hasAdmissionLetter,
-- app.appStatus appStatus,
-- app.appStatusSeqNo appStatusSeqNo,
-- scholarship.id scholId,

-- ins.instituteName instituteName,
-- ins.id insId,
-- ins.instituteAddressId instituteAddressId,

-- scholarship.offlineApplicationId offlineApplicationId,
-- scholarship.applicationId applicationId,
-- scholarship.scholMaxAmountCurSession scholMaxAmountCurSession,
-- scholarship.schMaxAmountContract  schMaxAmountContract,
-- scholarship.changeCourse changeCourse,
-- scholarship.changeIns changeIns,
-- scholarship.costCentre costCentre,
-- scholarship.studentBenIeficiaryId studentBenIeficiaryId,

-- dv.value domainValue,
-- dn.description domainName,

-- aps.sessionName startSessionName,
-- scholarship.schStatus schStatus
-- FROM scholarship , offlineApplicationDetails AS app
-- LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
-- LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
-- LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
-- JOIN portalAddress AS pad
-- JOIN applicationSession AS aps
-- WHERE app.id = scholarship.offlineApplicationId
-- AND aps.id = app.sessionId
-- AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
-- AND app.applicantAddressId = pad.id;
/*Revised view as on 24th March 2022*/
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

/* employee view */
DROP VIEW IF EXISTS employeeView;
CREATE VIEW employeeView AS SELECT
em.id employeePrimaryId,
em.employeeId employeeId,
em.employeeFirstName employeeFirstName,
em.employeeMiddleName employeeMiddleName,
em.employeeLastName employeeLastName,
em.employeeBloodGroup employeeBloodGroup,
em.employeeFathersName employeeFathersName,
em.employeeType employeeType,
em.employeeRecruitTime employeeRecruitTime,
em.employeeHOZonal employeeHOZonal,
em.employeeDOB employeeDOB,
em.employeeGender employeeGender,
em.employeeDateofJoining employeeDateofJoining,
em.employeeContractStartDate employeeContractStartDate,
em.employeeContractEndDate employeeContractEndDate,
em.employeeMaritialStatus employeeMaritialStatus,
em.employeeMobileNo employeeMobileNo,
em.employeeAlterNateMobileNo employeeAlterNateMobileNo,
em.employeeEmailID employeeEmailID,
em.employeeAlternateEmailID employeeAlternateEmailID,
em.employeeLeprosyAffected employeeLeprosyAffected,
em.employeeLeprosyAffectedInFamily employeeLeprosyAffectedInFamily,
em.employeeStatus employeeStatus,
dep.deptName deptName,
dg.desigName desigName,
dg.desigLevel desigLevel,
ad.addressAddln1 addressAddln1,
ad.addressAddln2 addressAddln2,
ad.addressCity addressCity,
ad.addressDistprov addressDistprov,
ad.addressState addressState,
ad.addressPinzip addressPinzip,
ad.addressCountry addressCountry
FROM
employee AS em,
address AS ad,
designation AS dg,
department AS dep
WHERE
em.addressId = ad.id
AND em.employeeDesignation = dg.id
AND em.employeeDepartment  = dep.id;

/* manage activity view */

DROP VIEW IF EXISTS manageActivityView;
CREATE VIEW manageActivityView AS SELECT 
ac.id activityPrimaryKeyId,
ac.activityId activityGenId,
ac.activityProgramNameId activityProgramNameId,
ac.activityCategoryId activityCategoryId,
ac.activitySubCategoryId activitySubCategoryId,
ac.activityDate activityDate,
ac.activityLocation activityLocation,
ac.activityDistrict activityDistrict,
ac.activityState activityState,
ac.activityDescription activityDescription,
pn.programName programName,
acc.activityCategory activityCategory,
acsc.activitySubCategory activitySubCategory
FROM activity AS ac, 
activityProgramName AS pn,
activityCategory AS acc, activitySubCategory as acsc 
WHERE pn.id  = ac.activityProgramNameId 
AND acc.id  = ac.activityCategoryId 
AND acsc.id = ac.activitySubCategoryId;

/* index add */
ALTER TABLE cnaDocuments ADD FULLTEXT(cnaDocumentsDescription);

/*Update application session table with batchNo in prod table */

UPDATE applicationSession SET fy_start_date = '2021-04-01', fy_end_date = '2022-03-31',
batchNo = 'BATCH-007',batchNoSr2 = 'BATCH-XI' WHERE sessionName = '2021-22';

UPDATE applicationSession SET fy_start_date = '2022-04-01' , fy_end_date = '2023-03-31',
batchNo = 'BATCH-008',batchNoSr2 = 'BATCH-XII' WHERE sessionName = '2022-23';

UPDATE applicationSession SET fy_start_date = '2023-04-01' , fy_end_date = '2024-03-31',
batchNo = 'BATCH-009',batchNoSr2 = 'BATCH-XIII' WHERE sessionName = '2023-24';

/* ADMIN UPDATE */

UPDATE admins SET 
donor        = 'don', 
donation     = 'dnt',
colony       = 'col',
partner      = 'prt',
family       = 'fly',
livelihood   = 'lvh',
education    = 'edu',
cna          = 'cna',
hr           = 'hr',
siteAdmin    = 'sya',
meetings     = 'mtg',
media        = 'media'
WHERE intuId = 'SU-000001';

/** Assign Donation View-old **/
DROP VIEW IF EXISTS assignDonationViewOld;
CREATE VIEW assignDonationViewOld AS SELECT
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

FROM scholarship ,applicationDetails AS app
LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
WHERE app.id = scholarship.applicationId
AND scholarship.id = academicYrSchol.scholarshipId
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

FROM scholarship , offlineApplicationDetails AS app
LEFT OUTER JOIN institute AS ins ON app.instituteId  = ins.id
LEFT OUTER JOIN domainName AS dn ON app.courseLevelValueId = dn.id
LEFT OUTER JOIN domainValues AS dv ON app.courseNameValueId = dv.id
JOIN portalAddress AS pad
JOIN applicationSession AS aps
JOIN academicYrSchol
WHERE app.id = scholarship.offlineApplicationId
AND scholarship.id = academicYrSchol.scholarshipId
AND aps.id = app.sessionId
AND app.appStatus IN ('SCH' , 'CON-ASGND', 'SCH-ALCTD')
AND app.applicantAddressId = pad.id;

/* new added 01 dec 2021 */
/** Assign Donation View-2 **/
DROP VIEW IF EXISTS assignDonationView;
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
aps.batchNo apsBatchNo,
aps.batchNoSr2 apsBatchNoSr2,

apsay.id apsaySessionId,
apsay.sessionName apsaySessionName,

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

/*SCH UntaggedVoucherView */
DROP VIEW IF EXISTS UntaggedSchVoucherView;
CREATE VIEW UntaggedSchVoucherView AS
SELECT
tv.voucher_number, 
tv.id voucherPrimaryId,
-- any_value(tv.prnSelected) prnSelected,
any_value(tv.entityName) entityName,
any_value(tv.guid) guid,
any_value (tv.date) voucherDate, 
any_value(tv.voucher_type) voucherType,
any_value(narration) narration,
any_value(ta.ledger) ledger, 
any_value(ta.amount) amount,
any_value(tcc.name)  costCenter,
any_value(tcc.ledger) tccLedger
FROM imisTrnVoucher tv, trnAccounting ta ,trnCostCentre tcc
WHERE tv.guid = ta.guid
AND   tv.guid = tcc.guid
AND   tv.voucher_type = 'BANK PAYMENT'
AND   tcc.name IN (SELECT costCenter FROM schPrnDetails)
-- AND   tv.prnHeaderId IS NULL
GROUP BY tv.id,tv.voucher_number;
/*end SCH  UntaggedVoucherView*/

/*Payment Received*/
DROP VIEW IF EXISTS paymentReceivedView;
CREATE VIEW paymentReceivedView AS SELECT

spv.id schPrnVoucherPrimaryId,
schprn.prnHdrId headerPrimaryId,
tv.id imisTrnVoucherPrimaryId,
spv.prnHeaderGenId prnHeaderGenId,
spv.trnVoucherPrimaryId trnVoucherPrimaryId,
spv.prnHeaderPrimaryId prnHeaderPrimaryId,


tv.date,
tv.entityName,
tv.voucher_number,
tv.narration,

tcc.amount,
tcc.ledger,
tcc.name tccCostCentre,

aps.id,
aps.sessionName,

cmm.commPurpose,
cmm.beneficiaryTypeValueId,
dv.value,
cmm.prnGenId,
cmm.commPrnFlag,

schprn.schPrnDetailsCostCenter costCentre,
schprn.schPrnDetailsprnAmount,
schprn.schPrnDetailsPrnPurpose,
schprn.schPrnDetailsprnAmount amtPaid

FROM

imisTrnVoucher tv,
trnCostCentre tcc,
mstCostCentre mcc,
commintmentScheduleSchol cmm,
schPrnView schprn,
applicationSession aps,
domainValues dv,
schPrnVoucher spv

WHERE tv.guid = tcc.guid
AND tv.voucher_type = 'BANK PAYMENT'
AND tcc.name        = mcc.name
AND mcc.category LIKE '%batch%'
AND cmm.academicYrSessionId    = aps.id
AND cmm.commPrnFlag            = "Paid"
AND spv.prnType                = 'SCH'
AND cmm.beneficiaryTypeValueId = dv.id
AND schprn.schPrnDetailsCommId = cmm.id
AND spv.prnHeaderPrimaryId     = schprn.prnHdrId
AND spv.trnVoucherPrimaryId    = tv.id;

/*end*/

/*Donation Received view*/
DROP VIEW IF EXISTS donationReceivedView;
CREATE VIEW donationReceivedView AS
SELECT
tv.voucher_number, 
tv.id imisTrnId,
abs(ta.amount) amount, 
tv.voucher_type voucherType, 
tv.narration narration, 
tv.date voucherDate,
ta.ledger ledger,
abs(ta.amount_forex) amountForex,
ta.currency currency
FROM imisTrnVoucher tv, 
trnAccounting ta
WHERE narration LIKE '%grant%' 
AND ta.guid=tv.guid 
AND ta.amount < 0 
AND tv.voucher_type='Receipt'
AND tv.donationRcvdId IS null;
/*end*/


/* familyMemberListView */

DROP VIEW IF EXISTS familyMemberListView;
CREATE VIEW familyMemberListView  AS  select
fm.id AS familyMemberId,
fm.familyMemberFName AS familyMemberFName,
fm.familyMemberLName AS familyMemberLName,
col.colonyName AS colonyName
from familyMembers fm
join family fy
join colony col
where
fm.familyId = fy.id
and fy.colonyId = col.id;

/* UntaggedMouVoucherView */
DROP VIEW IF EXISTS UntaggedMouVoucherView;
CREATE VIEW UntaggedMouVoucherView AS
SELECT
tv.voucher_number, 
tv.id voucherPrimaryId,
-- any_value(tv.prnSelected) prnSelected,
any_value(tv.entityName) entityName,
any_value(tv.guid) guid,
any_value (tv.date) voucherDate, 
any_value(tv.voucher_type) voucherType,
any_value(narration) narration,
any_value(ta.ledger) ledger, 
any_value(ta.amount) amount,
any_value(tcc.name)  costCentre,
any_value(tcc.ledger) tccLedger
FROM imisTrnVoucher tv, trnAccounting ta , trnCostCentre tcc
WHERE tv.guid=ta.guid
AND   tv.guid=tcc.guid
AND   tv.voucher_type= 'BANK PAYMENT'
AND   tcc.entityName IN (SELECT costCentreEntityName FROM mouPrnDetails)
AND   tcc.name IN (SELECT costCentreName FROM mouPrnDetails)
-- AND   tv.prnHeaderId IS NULL
GROUP BY tv.id,tv.voucher_number;

-- MOU prn Received view old --
-- DROP VIEW IF EXISTS mouPaymentReceivedViewOld;
-- CREATE VIEW mouPaymentReceivedViewOld AS
-- SELECT

-- tv.id voucherPrimaryId,
-- mpv.mouPrimaryId,
-- tv.voucher_number,
-- tv.date,
-- tv.entityName,

-- tcc.name costCentre,
-- tcc.amount,
-- tcc.ledger,
-- tv.narration,
-- mps.mouPaymentSchedulePrnGenId,
-- mps.mouPaymentScheduleBillsPrnStatus
-- FROM
-- imisTrnVoucher tv,
-- trnCostCentre tcc,
-- mstCostCentre mcc,
-- mouPaymentSchedule mps,
-- mouPrnVoucher mpv
-- WHERE tv.guid = tcc.guid
-- AND tv.voucher_type = 'BANK PAYMENT'
-- AND tcc.name = mcc.name
-- AND mps.mouPaymentScheduleBillsPrnStatus = 'PAID'
-- -- AND tv.prnType = 'MOU'
-- AND mpv.prnHeaderPrimaryId = mps.prnHeaderId;
-- End MOU prn Received view old --


DROP VIEW IF EXISTS mouPaymentReceivedView;
CREATE VIEW mouPaymentReceivedView AS SELECT

mpv.id mouPrnVoucherPrimaryId,
mou.id mouPrimaryId,
hdr.id headerPrimaryId,
tv.id imisTrnVoucherPrimaryId,
mpv.prnHeaderGenId prnHeaderGenId,
mpv.trnVoucherPrimaryId voucherPrimaryId,
tv.narration,
tv.voucher_number,
tv.date,
ta.amount voucherAmt,
mpv.entityName  voucherEntityName,
mpv.costCentre  voucherCostCentre,
mps.mouPaymentScheduleBillsPrnStatus,
mps.mouPaymentScheduleTranchesNo trancheNo,
mps.mouPaymentScheduleAmtFixed tAmtFixed,
mps.mouPaymentScheduleAmtVariable tAmtVariable


FROM
imisTrnVoucher tv,
trnAccounting  ta,
mouPrnVoucher  mpv,
mouTable       mou,
mouPrnHeader   hdr,
mouPaymentSchedule mps

WHERE ta.guid = tv.guid
AND   ta.amount > 0 
AND tv.voucher_type = 'BANK PAYMENT'

AND   tv.id               = mpv.trnVoucherPrimaryId
AND   mou.id              = mpv.mouPrimaryId
AND   hdr.id              = mpv.prnHeaderPrimaryId
AND   mou.costCentreName  = mpv.costCentre
AND mps.mouPaymentScheduleBillsPrnStatus = 'PAID'
AND mpv.prnHeaderPrimaryId = mps.prnHeaderId;


/* UntaggedLvhVoucherView */
    DROP VIEW IF EXISTS untaggedLvhVoucherView;
    CREATE VIEW untaggedLvhVoucherView AS SELECT
    tv.voucher_number, 
    tv.id voucherPrimaryId,
    any_value(tv.prnSelected) prnSelected,
    any_value(tv.entityName) entityName,
    any_value(tv.guid) guid,
    any_value (tv.date) voucherDate, 
    any_value(tv.voucher_type) voucherType,
    any_value(narration) narration,
    any_value(ta.ledger) ledger, 
    any_value(ta.amount) amount,
    any_value(tcc.name)  costCentre,
    any_value(tcc.ledger) tccLedger
    FROM imisTrnVoucher tv, trnAccounting ta , trnCostCentre tcc
    WHERE tv.guid=ta.guid
    AND   tv.guid=tcc.guid
    AND   tv.voucher_type= 'BANK PAYMENT'
    AND   tcc.entityName IN (SELECT costCentreEntity FROM lvhPrnDetails)
    AND   tcc.name IN (SELECT costCentre FROM lvhPrnDetails)
    -- AND   tv.prnHeaderId IS NULL
    GROUP BY tv.id,tv.voucher_number;
/* UntaggedLvhVoucherView*/

/* UntaggedLvhVoucherView Modified */
    -- DROP VIEW IF EXISTS untaggedLvhVoucherView;
    -- CREATE VIEW untaggedLvhVoucherView AS
    -- SELECT
    -- tv.id voucherPrimaryId,
    -- tv.voucher_number, 
    -- -- any_value(tv.prnSelected) prnSelected,
    -- -- any_value(hdr.prnSelected) prnSelected,
    -- any_value(tv.entityName) entityName,
    -- any_value(tv.guid) guid,
    -- any_value (tv.date) voucherDate, 
    -- any_value(tv.voucher_type) voucherType,
    -- any_value(narration) narration,
    -- any_value(ta.ledger) ledger, 
    -- any_value(ta.amount) amount,
    -- any_value(tcc.name)  costCentre,
    -- any_value(tcc.ledger) tccLedger
    -- FROM imisTrnVoucher tv,trnAccounting ta,trnCostCentre tcc,lvhPrnHeader hdr
    -- WHERE tv.guid=ta.guid
    -- AND   tv.guid=tcc.guid
    -- AND   tv.voucher_type = 'BANK PAYMENT'
    -- AND   tcc.entityName IN (SELECT costCentreEntity FROM lvhPrnDetails)
    -- -- AND   tcc.name IN (SELECT costCentre FROM lvhPrnDetails)
    -- -- AND   hdr.prnSelected IS NULL
    -- GROUP BY tv.id,tv.voucher_number;
/* UntaggedLvhVoucherView Modified */

-- End Untagged Lvh Voucher View

-- Lvh prn Received view --
-- DROP VIEW IF EXISTS lvhPaymentReceivedView;
-- CREATE VIEW lvhPaymentReceivedView AS
-- SELECT
-- tv.entityName,
-- tv.voucher_number,
-- tv.date,
-- tcc.name costCentre,
-- tcc.amount,
-- tcc.ledger,
-- tv.narration,
-- lvhs.lvhPrnGenId,
-- lvhs.lvhProjectBenfTranchStatus
-- FROM
-- imisTrnVoucher tv,
-- trnCostCentre tcc,
-- mstCostCentre mcc,
-- lvhProjectBenfTranch lvhs
-- WHERE tv.guid = tcc.guid
-- AND tv.voucher_type = 'BANK PAYMENT'
-- AND tcc.name = mcc.name
-- AND lvhs.lvhProjectBenfTranchStatus = 'Paid'
-- AND tv.prnType = 'LVH'
-- AND tv.prnId = lvhs.lvhPrnHeaderId;
-- End Lvh prn Received view --

-- Lvh prn Received view --
-- DROP VIEW IF EXISTS lvhPaymentReceivedViewOld;
-- CREATE VIEW lvhPaymentReceivedViewOld AS
-- SELECT
-- lvhs.lvhPrnGenId,
-- lvhs.costCentre costCentre,
-- lvhs.lvhProjectBenfTranchPayableAmount payableAmount,
-- tv.narration,
-- tv.entityName,
-- tv.voucher_number,
-- tv.date,
-- lvhs.lvhProjectId,
-- -- tcc.name costCentre,
-- tcc.amount paidInTallyAmount,
-- -- tcc.ledger,
-- lvhs.lvhProjectBenfTranchStatus
-- FROM
-- imisTrnVoucher tv,
-- trnCostCentre tcc,
-- -- mstCostCentre mcc,
-- lvhProjectBenfTranch lvhs
-- WHERE tv.guid = tcc.guid
-- AND tv.voucher_type = 'BANK PAYMENT'
-- AND tcc.name = lvhs.costCentre
-- AND lvhs.lvhProjectBenfTranchStatus = 'Paid'
-- AND tv.prnType = 'LVH'
-- AND tv.prnId = lvhs.lvhPrnHeaderId;
-- End Lvh prn Received view --

-- Lvh prn Received view Test--
-- DROP VIEW IF EXISTS lvhPaymentReceivedView;
-- CREATE VIEW lvhPaymentReceivedView AS
-- SELECT
-- -- lvhs.lvhPrnGenId,
-- -- lvhs.costCentre costCentre,
-- -- lvhs.lvhProjectBenfTranchPayableAmount payableAmount,
-- -- lvhs.lvhProjectId,
-- -- lvhs.lvhProjectBenfTranchStatus
-- tv.prnHeaderId lvhprnGenId,
-- lvhp.costCentre,
-- ta.amount,
-- tv.narration,
-- lvhp.entityName,
-- tv.voucher_number,
-- tv.date,
-- lvhp.id lvhProjectId
-- -- ta.amount paidInTallyAmount
-- -- tcc.name costCentre,
-- -- tcc.amount paidInTallyAmount,
-- -- tcc.ledger,

-- FROM
-- imisTrnVoucher tv,
-- trnAccounting  ta,
-- -- trnCostCentre tcc,
-- -- mstCostCentre mcc,
-- -- lvhProjectBenfTranch lvhs
-- lvhProject lvhp
-- -- WHERE tv.guid = tcc.guid
-- WHERE ta.guid = tv.guid
-- -- AND   lvhp.id = 14
-- -- AND   ta.guid = tv.guid
-- AND   ta.amount > 0 
-- -- AND   lvhp.entityName = tv.entityName
-- AND   lvhp.costCentre = tv.costCentre
-- -- AND tv.voucher_type = 'BANK PAYMENT';
-- -- AND tcc.name = lvhs.costCentre
-- -- AND lvhs.lvhProjectBenfTranchStatus = 'Paid'
-- -- AND tv.prnType = 'LVH'
-- -- AND tv.prnId = lvhs.lvhPrnHeaderId;
-- -- End Lvh prn Received view Test--