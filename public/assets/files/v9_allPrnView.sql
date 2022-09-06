DROP VIEW IF EXISTS allPrnViews;
CREATE VIEW allPrnViews AS 
SELECT
dt.id                       donationId,
tv.voucher_number           voucherNumber,
tv.prnType                  prnType,
sch.schPrnDetailsprnAmount  schPrnAmount,
sch.prnHeaderGenId          schPrnGenId,
sch.prnDtlsid               schPrnDtsId,
sch.schPrnDetailsPrnPurpose schPurpose
FROM donations as dt
JOIN schPrnView as sch ON sch.donationId = dt.id
JOIN imisTrnVoucher as tv
WHERE
tv.prnId = sch.prnHdrId

UNION ALL
SELECT
dt.id                       donationId,
tv.voucher_number           voucherNumber,
tv.prnType                  prnType,
lvh.lvhPrnDetailsAmount      lvhPrnAmount,
lvh.lvhPrnHeaderGenId       lvhPrnGenId,
lvh.lvhPrnDetailsPrimaryId  lvhPrnDtsId,
lvh.lvhPrnHeaderProjectNo   lvhProjectNo
FROM donations as dt
LEFT OUTER JOIN lvhPrnView as lvh ON lvh.donationId = dt.id
JOIN imisTrnVoucher as tv
WHERE
tv.prnId = lvh.lvhPrnHeaderPrimaryId

UNION ALL
SELECT
dt.id                       donationId,
tv.voucher_number           voucherNumber,
tv.prnType                  prnType,
(mou.mouPrnHeaderFixedAmt+mou.mouPrnHeaderVarAmt) as mouPrnAmount,
mou.mouPrnHeaderId          mouPrnGenId,
mou.detailsPrimaryId        mouPrnDtsId,
CONCAT(mou.mouPrnDetailsBenfFName," ",mou.mouPrnDetailsBenfMName," ",mou.mouPrnDetailsBenfLName) as mouLdrName
FROM donations as dt
LEFT OUTER JOIN mouPrnView as mou ON mou.donationId = dt.id
JOIN imisTrnVoucher as tv
WHERE
tv.prnId = mou.headerPrimaryId;