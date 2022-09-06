INSERT INTO trn_cost_centre SELECT * FROM trn_cost_centre_2;
INSERT INTO trn_accounting  SELECT * FROM trn_accounting_2;
INSERT INTO trn_voucher     SELECT * FROM trn_voucher_2;
INSERT INTO mst_ledger      SELECT * FROM mstLedgerCopy;

SELECT COUNT(*) FROM imisConfig;
SELECT COUNT(*) FROM mstCostCentre;
SELECT COUNT(*) FROM imisTrnVoucher;
SELECT COUNT(*) FROM trnAccounting;
SELECT COUNT(*) FROM trnCostCentre;
SELECT COUNT(*) FROM mst_ledger;