DROP VIEW IF EXISTS lvhPaymentReceivedView;
CREATE VIEW lvhPaymentReceivedView AS SELECT

lvhp.id lvhProjectId,
hdr.id headerPrimaryId,
prv.id lvhPrnVoucherPrimaryId,
tv.id imisTrnVoucherPrimaryId,
prv.prnHeaderGenId prnHeaderGenId,
prv.trnVoucherPrimaryId trnVoucherPrimaryId,

tv.narration,
tv.voucher_number,
tv.date,
ta.amount voucherAmt,
hdr.totalPrnAmount prnAmt,

prv.entityName  voucherEntityName,
prv.costCentre  voucherCostCentre

FROM
imisTrnVoucher tv,
trnAccounting  ta,
lvhPrnVoucher  prv,
lvhProject     lvhp,
lvhPrnHeader   hdr

WHERE ta.guid = tv.guid
AND   ta.amount > 0 
-- AND   lvhp.id = 3
AND   tv.id           = prv.trnVoucherPrimaryId
AND   lvhp.id         = prv.projectPrimaryId
AND   hdr.id          = prv.prnHeaderPrimaryId
AND   lvhp.costCentre = prv.costCentre;
