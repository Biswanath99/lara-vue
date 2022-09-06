/* TABLE 1
Create imisConfig table from config table and add colums 
*/
\! echo " Create imisConfig"
DROP TABLE 		imisConfig;
CREATE TABLE 	imisConfig as select * from config;
/* ALTER TABLE imisConfig CHANGE name  name VARCHAR(64) CHARACTER SET utf8; */
ALTER TABLE 	imisConfig
add column created_at	datetime,
add column updated_at	datetime;
/* TABLE 2
Create mstCostCategory table from mst_cost_category table and add colums 
*/
\! echo " Create mstCostCategory"
DROP TABLE 		mstCostCategory;
CREATE TABLE 	mstCostCategory as select * from mst_cost_category;
ALTER TABLE mstCostCategory CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	mstCostCategory
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime
/* TABLE 3
Create mstCostCentre table from mst_cost_centre table and add colums 
*/
\! echo " Create mstCostCentre"
DROP TABLE 		mstCostCentre;
CREATE TABLE 	mstCostCentre as select * from mst_cost_centre;
ALTER TABLE mstCostCentre CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	mstCostCentre
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
/* TABLE 4
Create imisTrnVoucher table from trn_voucher table and add colums 
*/
\! echo " Create imisTrnVoucher"
DROP TABLE 		imisTrnVoucher;
CREATE TABLE 	imisTrnVoucher as select * from trn_voucher;
ALTER TABLE imisTrnVoucher CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	imisTrnVoucher 
add column prnHeaderId 	varchar(32),
add column prnId 		varchar(32),
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime,
add column prnSelected 	varchar(32);
/* TABLE 5
Create trnAccounting table from trn_accounting table and add colums 
*/
\! echo " Create trnAccounting"
DROP TABLE 		trnAccounting;
CREATE TABLE 	trnAccounting as select * from trn_accounting;
ALTER TABLE trnAccounting CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	trnAccounting
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
/* TABLE 6
Create trnCostCentre table from trn_cost_centre table and add colums 
*/
\! echo " Create trnCostCentre"
DROP TABLE 		trnCostCentre;
CREATE TABLE 	trnCostCentre as select * from trn_cost_centre;
ALTER TABLE trnCostCentre CHANGE guid  guid  VARCHAR(64) CHARACTER SET utf8;
ALTER TABLE 	trnCostCentre
add column entityName	varchar(32),
add column created_at	datetime,
add column updated_at	datetime;
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
/* 
CREATE ALL TRIGGERS 
*/
/*  
TRIGGER : insertMstCostCategory
mysql> describe mstCostCategory;
+----------------------+---------------+------+-----+---------+-------+
| Field                | Type          | Null | Key | Default | Extra |
+----------------------+---------------+------+-----+---------+-------+
| guid                 | varchar(64)   | YES  |     | NULL    |       |
| name                 | varchar(1024) | NO   |     |         |       |
| allocate_revenue     | tinyint       | YES  |     | NULL    |       |
| allocate_non_revenue | tinyint       | YES  |     | NULL    |       |
| entityName           | varchar(32)   | YES  |     | NULL    |       |
| created_at           | date          | YES  |     | NULL    |       |
| updated_at           | date          | YES  |     | NULL    |       |
+----------------------+---------------+------+-----+---------+-------+
7 rows in set (0.00 sec)
*/
DROP TRIGGER insertMstCostCategory ;
DELIMITER $$
CREATE TRIGGER insertMstCostCategory 
AFTER INSERT ON mst_cost_category FOR EACH ROW
begin
       DECLARE mstCostCategoryExists Boolean;
	   DECLARE today date;
	   DECLARE entityNameValue Varchar(32);
	   SET @mstCostCategoryExists=0;
	   SET @entityNameValue = NULL;
	   SET @today = NULL;
	   select sysdate() into @today;
       SELECT config.value
       INTO @entityNameValue
       FROM config
       WHERE config.name like 'Company%';
	   SELECT 1
       INTO @mstCostCategoryExists
       FROM mstCostCategory
       WHERE mstCostCategory.guid 		= New.guid
	     and mstCostCategory.entityName   = @entityNameValue;
	   IF @mstCostCategoryExists = 1
	   THEN
	   UPDATE mstCostCategory
	       SET mstCostCategory.name      				= NEW.name, 
		       mstCostCategory.allocate_revenue   		= NEW.allocate_revenue, 
		       mstCostCategory.allocate_non_revenue  	= NEW.allocate_revenue,
			   mstCostCategory.updated_at     			= @today
           WHERE mstCostCategory.guid    				= NEW.guid
		     AND mstCostCategory.entityName     		= @entityNameValue; 
       ELSE
           INSERT INTO mstCostCategory values 
		  (NEW.guid, 
		   NEW.name, 
		   NEW.allocate_revenue, 
		   NEW.allocate_revenue, 
		   @entityNameValue, 
		   @today, 
		   @today);	   
        END IF;
END;
$$
DELIMITER ;
\! echo " end Trigger insertMstCostCategory";
/*  
TRIGGER : insertMstCostCentre
mysql> describe mstCostCentre;
+------------+---------------+------+-----+---------+-------+
| Field      | Type          | Null | Key | Default | Extra |
+------------+---------------+------+-----+---------+-------+
| guid       | varchar(64)   | YES  |     | NULL    |       |
| name       | varchar(1024) | NO   |     |         |       |
| parent     | varchar(1024) | NO   |     |         |       |
| category   | varchar(1024) | NO   |     |         |       |
| entityName | varchar(32)   | YES  |     | NULL    |       |
| created_at | date          | YES  |     | NULL    |       |
| updated_at | date          | YES  |     | NULL    |       |
+------------+---------------+------+-----+---------+-------+
7 rows in set (0.01 sec)
*/
DROP TRIGGER insertMstCostCentre ;
DELIMITER $$
CREATE TRIGGER insertMstCostCentre 
AFTER INSERT ON `mst_cost_centre` FOR EACH ROW
begin
       DECLARE mstCostCentreExists Boolean;
	   DECLARE today date;
	   DECLARE entityNameValue Varchar(32);
	   SET @mstCostCentreExists=0;
	   SET @entityNameValue = NULL;
	   SET @today = NULL;
	   select sysdate() into @today;
       SELECT config.value
       INTO @entityNameValue
       FROM config
       WHERE config.name like 'Company%';
	   SELECT 1
       INTO @mstCostCentreExists
       FROM mstCostCentre
       WHERE mstCostCentre.guid 		= New.guid
	     and mstCostCentre.entityName   = @entityNameValue;
	   IF @mstCostCentreExists = 1
	   THEN
	   UPDATE mstCostCentre
	       SET mstCostCentre.name      		= New.name, 
		       mstCostCentre.parent    		= New.parent, 
		       mstCostCentre.category  		= New.category,
			   mstCostCentre.updated_at     = @today
           WHERE mstCostCentre.guid    		= NEW.guid
		     AND mstCostCentre.entityName   = @entityNameValue; 
       ELSE
           INSERT INTO mstCostCentre values (NEW.guid, New.name, New.parent, New.category, @entityNameValue, @today, @today);	   
        END IF;
END;
$$
DELIMITER ;
\! echo " end Trigger insertMstCostCentre";


/*  
TRIGGER : insertTrnVoucher 
mysql> describe imisTrnVoucher;
+-----------------------+---------------+------+-----+---------+-------+
| Field                 | Type          | Null | Key | Default | Extra |
+-----------------------+---------------+------+-----+---------+-------+
| guid                  | varchar(64)   | YES  |     | NULL    |       |
| date                  | date          | NO   |     | NULL    |       |
| voucher_type          | varchar(1024) | NO   |     | NULL    |       |
| voucher_number        | varchar(64)   | NO   |     |         |       |
| reference_number      | varchar(64)   | NO   |     |         |       |
| narration             | varchar(4000) | NO   |     |         |       |
| party_name            | varchar(256)  | NO   |     | NULL    |       |
| place_of_supply       | varchar(256)  | NO   |     | NULL    |       |
| is_invoice            | tinyint       | YES  |     | NULL    |       |
| is_accounting_voucher | tinyint       | YES  |     | NULL    |       |
| is_inventory_voucher  | tinyint       | YES  |     | NULL    |       |
| is_order_voucher      | tinyint       | YES  |     | NULL    |       |
| prnHeaderId           | varchar(32)   | YES  |     | NULL    |       |
| prnId                 | varchar(32)   | YES  |     | NULL    |       |
| entityName            | varchar(32)   | YES  |     | NULL    |       |
| created_at            | date          | YES  |     | NULL    |       |
| updated_at            | date          | YES  |     | NULL    |       |
| prnSelected           | varchar(32)   | YES  |     | NULL    |       |
+-----------------------+---------------+------+-----+---------+-------+
18 rows in set (0.01 sec)
*/ 
DROP TRIGGER insertTrnVoucher ;
DELIMITER $$
CREATE TRIGGER insertTrnVoucher
AFTER INSERT ON `trn_voucher` FOR EACH ROW
begin
       DECLARE trnVoucherExists Boolean;
	   DECLARE entityNameValue Varchar(32);
	   SET @trnVoucherExists=0;
	   SET @entityNameValue = NULL;
       -- Check trnVoucher table
	   select sysdate() into @today;
	   SELECT config.value
       INTO @entityNameValue
       FROM config
       WHERE config.name like 'Company%';
       SELECT 1
       INTO @trnVoucherExists
       FROM imisTrnVoucher
       WHERE imisTrnVoucher.guid 		= NEW.guid
	   AND imisTrnVoucher.entityName   = @entityNameValue;
       IF @trnVoucherExists = 1
       THEN
          UPDATE imisTrnVoucher
             SET imisTrnVoucher.date            		= New.date, 
		         imisTrnVoucher.voucher_type    		= New.voucher_type, 
		         imisTrnVoucher.voucher_number  		= New.voucher_number,
			     imisTrnVoucher.reference_number  		= New.reference_number,
			     imisTrnVoucher.narration  				= New.narration,
			    imisTrnVoucher.party_name  			    = New.party_name,
			     imisTrnVoucher.place_of_supply  		= New.place_of_supply,
			     imisTrnVoucher.is_invoice  			= New.is_invoice,
			     imisTrnVoucher.is_accounting_voucher  	= New.is_accounting_voucher,
			     imisTrnVoucher.is_inventory_voucher  	= New.is_inventory_voucher,
			     imisTrnVoucher.is_order_voucher  		= New.is_order_voucher,
				 imisTrnVoucher.updated_at				= @today
		   WHERE imisTrnVoucher.guid    				= NEW.guid
		   AND   imisTrnVoucher.entityName     			= @entityNameValue;
       ELSE
           INSERT INTO imisTrnVoucher
		   values 
		        (
				 New.guid,
		         New.date, 
		         New.voucher_type, 
		         New.voucher_number,
			     New.reference_number,
			     New.narration,
			     New.party_name,
			     New.place_of_supply,
			     New.is_invoice,
			     New.is_accounting_voucher,
			     New.is_inventory_voucher,
			     New.is_order_voucher,
				 NULL,   			/* imisTrnVoucher.prnHeaderId	*/	
				 NULL,   			/* imisTrnVoucher.prnId         */
				 @entityNameValue,  /* imisTrnVoucher.entityName	*/
				 @today,  			/* imisTrnVoucher.created_at    */
				 @today,  			/* imisTrnVoucher.updated_at    */
				 NULL     			/* imisTrnVoucher.prnSelected	*/
				);	   
       END IF;
END;
$$
DELIMITER ;
\! echo " end Trigger insertTrnVoucher";
/* 
TRIGGER : insertTrnAccounting
mysql> describe trnAccounting;
+--------------+---------------+------+-----+---------+-------+
| Field        | Type          | Null | Key | Default | Extra |
+--------------+---------------+------+-----+---------+-------+
| guid         | varchar(64)   | YES  |     | NULL    |       |
| ledger       | varchar(1024) | NO   |     |         |       |
| amount       | decimal(17,2) | NO   |     | 0.00    |       |
| amount_forex | decimal(17,2) | NO   |     | 0.00    |       |
| currency     | varchar(16)   | NO   |     |         |       |
| entityName   | varchar(32)   | YES  |     | NULL    |       |
| created_at   | date          | YES  |     | NULL    |       |
| updated_at   | date          | YES  |     | NULL    |       |
+--------------+---------------+------+-----+---------+-------+
8 rows in set (0.00 sec)
*/
DROP TRIGGER insertTrnAccounting ;
DELIMITER $$
CREATE TRIGGER insertTrnAccounting 
AFTER INSERT ON trn_accounting FOR EACH ROW
begin
       DECLARE trnAccountingExists Boolean;
	   DECLARE today date;
	   DECLARE entityNameValue Varchar(32);
	   SET @trnAccountingExists=0;
	   SET @entityNameValue = NULL;
	   SET @today = NULL;
	   select sysdate() into @today;
       SELECT config.value
       INTO @entityNameValue
       FROM config
       WHERE config.name like 'Company%';
	   SELECT 1
       INTO @trnAccountingExists
       FROM trnAccounting
       WHERE trnAccounting.guid 		= New.guid
	     AND trnAccounting.entityName   = @entityNameValue
		 AND trnAccounting.ledger      	= NEW.ledger;
	   IF @trnAccountingExists = 1
	   THEN
	   UPDATE trnAccounting
	       SET trnAccounting.amount   				= NEW.amount, 
		       trnAccounting.amount_forex  			= NEW.amount_forex,
			   trnAccounting.currency  				= NEW.currency,
			   trnAccounting.updated_at     		= @today
           WHERE trnAccounting.guid    				= NEW.guid
		     AND trnAccounting.entityName     		= @entityNameValue
			 AND trnAccounting.ledger      			= NEW.ledger; 
       ELSE
           INSERT INTO trnAccounting values 
		  (NEW.guid, 
		   NEW.ledger, 
		   NEW.amount, 
		   NEW.amount_forex, 
		   NEW.currency,
		   @entityNameValue, 
		   @today, 
		   @today);	   
        END IF;
END;
$$
DELIMITER ;
\! echo " end Trigger insertTrnAccounting";
/* 
/* 
TRIGGER : insertTrnCostCentre
mysql> describe trnCostCentre;
+------------+---------------+------+-----+---------+-------+
| Field      | Type          | Null | Key | Default | Extra |
+------------+---------------+------+-----+---------+-------+
| guid       | varchar(64)   | YES  |     | NULL    |       |
| ledger     | varchar(1024) | NO   |     |         |       |
| name       | varchar(1024) | NO   |     |         |       |
| amount     | decimal(17,2) | NO   |     | 0.00    |       |
| entityName | varchar(32)   | YES  |     | NULL    |       |
| created_at | date          | YES  |     | NULL    |       |
| updated_at | date          | YES  |     | NULL    |       |
+------------+---------------+------+-----+---------+-------+
7 rows in set (0.00 sec)
*/
DROP TRIGGER insertTrnCostCentre ;
DELIMITER $$
CREATE TRIGGER insertTrnCostCentre
AFTER INSERT ON trn_cost_centre FOR EACH ROW
begin
       DECLARE trnCostCentreExists Boolean;
	   DECLARE today date;
	   DECLARE entityNameValue Varchar(32);
	   SET @trnCostCentreExists=0;
	   SET @entityNameValue = NULL;
	   SET @today = NULL;
	   select sysdate() into @today;
       SELECT config.value
       INTO @entityNameValue
       FROM config
       WHERE config.name like 'Company%';
	   SELECT 1
       INTO @trnCostCentreExists
       FROM trnCostCentre
       WHERE trnCostCentre.guid 		= New.guid
	     and trnCostCentre.entityName   = @entityNameValue;
	   IF @trnCostCentreExists = 1
	   THEN
	   UPDATE trnCostCentre
	       SET trnCostCentre.ledger      			= NEW.ledger, 
			   trnCostCentre.name 					= NEW.name,
		       trnCostCentre.amount   				= NEW.amount, 	       	   
			   trnCostCentre.updated_at     		= @today
           WHERE trnCostCentre.guid    				= NEW.guid
		     AND trnCostCentre.entityName     		= @entityNameValue; 
       ELSE
           INSERT INTO trnCostCentre values 
		  (NEW.guid, 
		   NEW.ledger, 
		   NEW.name, 
		   NEW.amount, 
		   @entityNameValue, 
		   @today, 
		   @today);	   
        END IF;
END;
$$
DELIMITER ;
\! echo " end Trigger insertTrnCostCentre";
/* 
TRIGGER : insertImisConfig
mysql> describe config;
+-------+---------------+------+-----+---------+-------+
| Field | Type          | Null | Key | Default | Extra |
+-------+---------------+------+-----+---------+-------+
| name  | varchar(64)   | NO   | PRI | NULL    |       |
| value | varchar(1024) | YES  |     | NULL    |       |
+-------+---------------+------+-----+---------+-------+
2 rows in set (0.00 sec)
*/
DROP TRIGGER insertImisConfig ;
DELIMITER $$
CREATE TRIGGER insertImisConfig
AFTER INSERT ON config FOR EACH ROW
begin
       DECLARE today date;
	   SET @today = NULL;
	   select sysdate() into @today;
       INSERT INTO imisConfig values 
		  (NEW.name, 
		   NEW.value, 
		   @today, 
		   @today);	   
END;
$$
DELIMITER ;
\! echo " end Trigger insertImisConfig";
DELETE from mstCostCategory;
\! echo " DELETE from mstCostCategory";
DELETE from mstCostCentre;
\! echo " DELETE from mstCostCentre";
DELETE from imisTrnVoucher;
\! echo "DELETE from imisTrnVoucher";
DELETE from trnAccounting;
\! echo " DELETE from trnAccounting";
DELETE from trnCostCentre;
\! echo " DELETE from trnCostCentre";