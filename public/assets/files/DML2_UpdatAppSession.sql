UPDATE applicationSession SET fy_start_date = '2021-04-01' , fy_end_date = '2022-03-31', batchNo='BATCH-007', batchNoSr2 ='BATCH-XI'    WHERE SessionName='2021-22';
UPDATE applicationSession SET fy_start_date = '2022-04-01' , fy_end_date = '2023-03-31', batchNo='BATCH-008', batchNoSr2 ='BATCH-XII'   WHERE SessionName='2022-23';
UPDATE applicationSession SET fy_start_date = '2023-04-01' , fy_end_date = '2024-03-31', batchNo='BATCH-009', batchNoSr2 ='BATCH-XIII'  WHERE SessionName='2023-24';
UPDATE applicationSession SET fy_start_date = '2020-04-01' , fy_end_date = '2021-03-31', batchNo='BATCH-006', batchNoSr2 ='BATCH-X'     WHERE SessionName='2020-21';
UPDATE applicationSession SET fy_start_date = '2019-04-01' , fy_end_date = '2020-03-31', batchNo='BATCH-005', batchNoSr2 ='BATCH-IX'    WHERE SessionName='2019-20';
UPDATE applicationSession SET fy_start_date = '2018-04-01' , fy_end_date = '2019-03-31', batchNo='BATCH-004', batchNoSr2 ='BATCH-VII'   WHERE SessionName='2018-19';
UPDATE applicationSession SET fy_start_date = '2017-04-01' , fy_end_date = '2018-03-31', batchNo='BATCH-003', batchNoSr2 ='BATCH-VII'   WHERE SessionName='2017-18';
UPDATE applicationSession SET fy_start_date = '2024-04-01' , fy_end_date = '2025-03-31', batchNo='BATCH-010', batchNoSr2 ='BATCH-XII'   WHERE SessionName='2024-25';
UPDATE applicationSession SET currentSession = 1 WHERE id = 2;
UPDATE applicationSession SET currentSession = 0 WHERE id = 1;
UPDATE applicationSession SET closed = 1 WHERE id = 1;
UPDATE applicationSession SET closed = 0 WHERE id = 2;
UPDATE applicationSession SET closed = 1 WHERE id = 3;

UPDATE applicationSession SET start_date = '01-07-2021'  WHERE SessionName='2021-22';
UPDATE applicationSession SET start_date = '01-07-2022'  WHERE SessionName='2022-23';
UPDATE applicationSession SET start_date = '01-07-2023'  WHERE SessionName='2023-24';