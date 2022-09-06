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
DROP TRIGGER IF EXISTS insertMstCostCategory ;
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
DROP TRIGGER IF EXISTS insertMstCostCentre ;
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
mysql> desc imisTrnVoucher;
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
| prnSelected           | varchar(32)   | YES  |     | NULL    |       |
| created_at            | datetime      | YES  |     | NULL    |       |
| updated_at            | datetime      | YES  |     | NULL    |       |
+-----------------------+---------------+------+-----+---------+-------+
18 rows in set (0.01 sec)

*/ 
DROP TRIGGER IF EXISTS insertTrnVoucher ;
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
		   (
				guid,
		        date, 
		        voucher_type, 
		        voucher_number,
			    reference_number,
			    narration,
			    party_name,
			    place_of_supply,
			    is_invoice,
			    is_accounting_voucher,
			    is_inventory_voucher,
			    is_order_voucher,
				prnHeaderId,   			/* imisTrnVoucher.prnHeaderId	*/	
				prnId,   			/* imisTrnVoucher.prnId         */
				entityName,  /* imisTrnVoucher.entityName	*/
			    prnSelected,
				created_at,  			/* imisTrnVoucher.created_at    */
				updated_at 			/* imisTrnVoucher.updated_at    */
			)
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
				 NULL,
				 @today,  			/* imisTrnVoucher.created_at    */
				 @today  			/* imisTrnVoucher.updated_at    */
				 
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
DROP TRIGGER IF EXISTS insertTrnAccounting ;
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
DROP TRIGGER IF EXISTS insertTrnCostCentre ;
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

/*TRIGGER : insertImisConfig
mysql> describe config;
+-------+---------------+------+-----+---------+-------+
| Field | Type          | Null | Key | Default | Extra |
+-------+---------------+------+-----+---------+-------+
| name  | varchar(64)   | NO   | PRI | NULL    |       |
| value | varchar(1024) | YES  |     | NULL    |       |
+-------+---------------+------+-----+---------+-------+
2 rows in set (0.00 sec)
*/
DROP TRIGGER IF EXISTS insertImisConfig ;
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

