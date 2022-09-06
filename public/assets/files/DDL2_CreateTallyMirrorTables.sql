/* TABLE 1
Create imisConfig table from config table and add colums 
*/
\! echo " Create imisConfig"
DROP TABLE 	IF EXISTS imisConfig;
CREATE TABLE 	imisConfig as select * from config where 2=1;
/* ALTER TABLE imisConfig CHANGE name  name VARCHAR(64) CHARACTER SET utf8; */
ALTER TABLE 	imisConfig
add column created_at	datetime,
add column updated_at	datetime;
ALTER TABLE imisConfig CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* TABLE 2
Create mstCostCategory table from mst_cost_category table and add colums 
*/
\! echo " Create mstCostCategory"
DROP TABLE IF EXISTS mstCostCategory;
CREATE TABLE 	mstCostCategory as select * from mst_cost_category;
ALTER TABLE mstCostCategory CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	mstCostCategory
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
ALTER TABLE mstCostCategory CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* TABLE 3
Create mstCostCentre table from mst_cost_centre table and add colums 
*/
\! echo " Create mstCostCentre"
DROP TABLE IF EXISTS mstCostCentre;
CREATE TABLE 	mstCostCentre as select * from mst_cost_centre where 2=1;
ALTER TABLE mstCostCentre CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	mstCostCentre
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
ALTER TABLE mstCostCentre CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* TABLE 4
Create imisTrnVoucher table from trn_voucher table and add colums 
*/
\! echo " Create imisTrnVoucher"
DROP TABLE IF EXISTS imisTrnVoucher;
CREATE TABLE 	imisTrnVoucher AS SELECT * FROM trn_voucher WHERE 2=1;
ALTER TABLE imisTrnVoucher ADD id bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE imisTrnVoucher CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE imisTrnVoucher 
ADD column donationId 	bigint unsigned,
ADD column donationRcvdId 	bigint unsigned,
ADD column prnType 	    varchar(32),
ADD column prnHeaderId 	varchar(32),
ADD column prnId 		varchar(32),
ADD column entityName	varchar(32),
ADD column prnSelected varchar(32),
ADD column created_at	datetime,
ADD column updated_at	datetime;

ALTER TABLE imisTrnVoucher CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* TABLE 5
Create trnAccounting table from trn_accounting table and add colums 
*/
\! echo " Create trnAccounting"
DROP TABLE IF EXISTS trnAccounting;
CREATE TABLE 	trnAccounting as select * from trn_accounting where 2=1;
ALTER TABLE trnAccounting CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	trnAccounting
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
ALTER TABLE trnAccounting CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* TABLE 6
Create trnCostCentre table from trn_cost_centre table and add colums 
*/
\! echo " Create trnCostCentre"
DROP TABLE IF EXISTS trnCostCentre;
CREATE TABLE 	trnCostCentre as select * from trn_cost_centre where 2=1;
ALTER TABLE trnCostCentre CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	trnCostCentre
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
ALTER TABLE trnCostCentre CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/* 
Display table structures 
*/
\! echo " describe mstCostCategory"
describe mstCostCategory;
\! echo " describe mstCostCentre";
describe mstCostCentre;
\! echo " describe imisTrnVoucher";
describe imisTrnVoucher;
\! echo " describe trnAccounting";
describe trnAccounting;
\! echo " describe trnCostCentre";
describe trnCostCentre;
\! echo " END CREATE TALLY DUPLICATE TABLES";

