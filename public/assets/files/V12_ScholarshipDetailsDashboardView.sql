DROP VIEW IF EXISTS scholarshipDashboardDetails;
CREATE VIEW scholarshipDashboardDetails AS SELECT
financialYear,
scholarshipType,
applicantGender,
COUNT(applicantGender) genderTotal
FROM applicationDetails
GROUP BY financialYear,scholarshipType,applicantGender WITH ROLLUP;
