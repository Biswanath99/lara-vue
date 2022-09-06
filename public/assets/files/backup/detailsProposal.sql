 describe lvhProject;
+------------------------+-----------------+------+-----+---------+----------------+
| Field                  | Type            | Null | Key | Default | Extra          |
+------------------------+-----------------+------+-----+---------+----------------+
| id                     | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| lvhProjectType         | varchar(32)     | YES  |     | NULL    |                |
| lvhProjectNo           | varchar(32)     | YES  |     | NULL    |                |
| lvhProjectTitle        | varchar(255)    | YES  |     | NULL    |                |
| lvhProjectFinancialYr  | varchar(10)     | YES  |     | NULL    |                |
| lvhProjectFileName     | varchar(255)    | YES  |     | NULL    |                |
| lvhProjectFilePath     | varchar(255)    | YES  |     | NULL    |                |
| lvhProjectFileType     | varchar(25)     | YES  |     | NULL    |                |
| lvhProjectBugetSlNo    | varchar(30)     | YES  |     | NULL    |                |
| lvhProjectBudgetHead   | varchar(64)     | YES  |     | NULL    |                |
| lvhProjectGrantPaid    | varchar(25)     | YES  |     | NULL    |                |
| lvhProjectApprovalDate | date            | YES  |     | NULL    |                |
| lvhProjectTranches     | int             | YES  |     | NULL    |                |
| lvhProjectGrantAmount  | double(8,2)     | YES  |     | NULL    |                |
| lvhProjectNoOfBenf     | int             | YES  |     | NULL    |                |
| pscmId                 | bigint unsigned | YES  |     | NULL    |                |
| lvhProposalId          | bigint unsigned | NO   |     | NULL    |                |
| created_at             | timestamp       | YES  |     | NULL    |                |
| updated_at             | timestamp       | YES  |     | NULL    |                |
+------------------------+-----------------+------+-----+---------+----------------+
19 rows in set (0.00 sec)

mysql> INSERT INTO lvhProject VALUES (1,'Group','GP/WB/MDP/001','Vegetables Vendor','2021-22',NULL,NULL,NULL,NULL,'Budget-001','0','2021-12-01',3,40000,2,1,1,NULL,NULL,'Kolkata');
Query OK, 1 row affected (0.18 sec)

mysql> 

describe lvhProjectBenf;
+-------------------------+-----------------+------+-----+---------+----------------+
| Field                   | Type            | Null | Key | Default | Extra          |
+-------------------------+-----------------+------+-----+---------+----------------+
| id                      | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| beneficiaryId           | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectId            | bigint unsigned | NO   |     | NULL    |                |
| lvhProposalId           | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectBenfType      | varchar(32)     | YES  |     | NULL    |                |
| lvhProjectBenfStatus    | varchar(25)     | YES  |     | NULL    |                |
| lvhProjectBenfAmount    | double(8,2)     | YES  |     | NULL    |                |
| lvhProjectBenfTotalPaid | double(8,2)     | YES  |     | NULL    |                |
| created_at              | timestamp       | YES  |     | NULL    |                |
| updated_at              | timestamp       | YES  |     | NULL    |                |
+-------------------------+-----------------+------+-----+---------+----------------+
10 rows in set (0.00 sec)

mysql> INSERT INTO lvhProjectBenf VALUES(1,10,1,1,NULL,'ACTIVE',30000,0,NULL,NULL);
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO lvhProjectBenf VALUES(2,11,1,1,NULL,'ACTIVE',20000,0,NULL,NULL);
Query OK, 1 row affected (0.00 sec)


describe lvhProjectBenfTranches;
ERROR 1146 (42S02): Table 'i-mis-project-kst.lvhProjectBenfTranches' doesn't exist
mysql> describe lvhProjectBenfTranch;
+-----------------------------------+-----------------+------+-----+---------+----------------+
| Field                             | Type            | Null | Key | Default | Extra          |
+-----------------------------------+-----------------+------+-----+---------+----------------+
| id                                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| BenifIciaryId                     | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectId                      | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectBenfId                  | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectTranchesId              | bigint unsigned | NO   |     | NULL    |                |
| lvhProjectBenfTranchPayableAmount | double(8,2)     | YES  |     | NULL    |                |
| lvhProjectBenfTranchPaidAmount    | double(8,2)     | YES  |     | NULL    |                |
| created_at                        | timestamp       | YES  |     | NULL    |                |
| updated_at                        | timestamp       | YES  |     | NULL    |                |
+-----------------------------------+-----------------+------+-----+---------+----------------+
9 rows in set (0.00 sec)

mysql> INSERT INTO lvhProjectBenfTranch VALUES (1,10,1,1,1,15000,0,NULL,NULL,'Remarks');
Query OK, 1 row affected (0.01 sec)

mysql> INSERT INTO lvhProjectBenfTranch VALUES (2,10,1,1,2,15000,0,NULL,NULL,'Remarks');
Query OK, 1 row affected (0.01 sec)

mysql> INSERT INTO lvhProjectBenfTranch VALUES (3,11,1,2,1,10000,0,NULL,NULL,'Remarks');
Query OK, 1 row affected (0.01 sec)

mysql> INSERT INTO lvhProjectBenfTranch VALUES (4,11,1,2,2,10000,0,NULL,NULL,'Remarks');
Query OK, 1 row affected (0.01 sec)

mysql> select *from lvhProjectBenfTranch;
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+
| id | BenifIciaryId | lvhProjectId | lvhProjectBenfId | lvhProjectTranchesId | lvhProjectBenfTranchPayableAmount | lvhProjectBenfTranchPaidAmount | created_at | updated_at |
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+
|  1 |            10 |            1 |                1 |                    1 |                          15000.00 |                           0.00 | NULL       | NULL       |
|  2 |            10 |            1 |                1 |                    2 |                          15000.00 |                           0.00 | NULL       | NULL       |
|  3 |            11 |            1 |                2 |                    1 |                          10000.00 |                           0.00 | NULL       | NULL       |
|  4 |            11 |            1 |                2 |                    2 |                          10000.00 |                           0.00 | NULL       | NULL       |
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+
4 rows in set (0.00 sec)

mysql> select *from lvhProjectBenfTranch order by lvhProjectTranchesId,lvhProjectBenfId ;
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+
| id | BenifIciaryId | lvhProjectId | lvhProjectBenfId | lvhProjectTranchesId | lvhProjectBenfTranchPayableAmount | lvhProjectBenfTranchPaidAmount | created_at | updated_at |
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+
|  1 |            10 |            1 |                1 |                    1 |                          15000.00 |                           0.00 | NULL       | NULL       |
|  3 |            11 |            1 |                2 |                    1 |                          10000.00 |                           0.00 | NULL       | NULL       |
|  2 |            10 |            1 |                1 |                    2 |                          15000.00 |                           0.00 | NULL       | NULL       |
|  4 |            11 |            1 |                2 |                    2 |                          10000.00 |                           0.00 | NULL       | NULL       |
+----+---------------+--------------+------------------+----------------------+-----------------------------------+--------------------------------+------------+------------+



select tranchLvhProjectId,lvhProjectTranchesNo,lvhProjectTranchesStatus from lvhProjBenfManagePrnView where lvhProjectTranchesStatus is null;