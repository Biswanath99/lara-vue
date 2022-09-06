DROP VIEW IF EXISTS mouPrnView;

CREATE VIEW mouPrnView AS SELECT

prnHdr.id headerPrimaryId,
prnHdr.mouPrnHeaderId,
prnHdr.mouPrnHeaderType,
prnHdr.mouPrnHeaderDate,
prnHdr.mouPrnHeaderBookedUnder,
prnHdr.mouPrnHeaderFixedAmt,
prnHdr.mouPrnHeaderVarAmt,
prnHdr.mouPrnHeaderPaymentMode,
prnHdr.mouPrnHeaderPaymentRemarks,
prnHdr.mouPrnHeaderCurrentTranch,
prnHdr.prnDonorId,
prnHdr.prnDonationId,
prnHdr.mouForeignId, 

prnHdr.mouPrnHeaderPaymentNarration,
prnHdr.budgetHeadGroup,
prnHdr.budgetHead,
prnHdr.imisTrnVoucherGuid,
prnHdr.imisTrnVoucherPrimaryId,

prnDtls.id detailsPrimaryId,
prnDtls.mouPrnDetailsBenfFName,
prnDtls.mouPrnDetailsBenfMName,
prnDtls.mouPrnDetailsBenfLName,
prnDtls.mouPrnDetailsBankBenfName,
prnDtls.mouPrnDetailsBankName,
prnDtls.mouPrnDetailsBankAcNo,
prnDtls.mouPrnDetailsBankIfsc,
prnDtls.mouPrnDetailsAmountFixedPayable,
prnDtls.mouPrnDetailsAmountVariablePayable,
prnDtls.mouPrnDetailsAmountFixedPaid,
prnDtls.mouPrnDetailsAmountVariablePaid,
prnDtls.mouPrnHeaderId headerForeignId,
prnDtls.mouPaymentScheduleId,
prnDtls.costCentreEntityName,
prnDtls.costCentreName,
prnDtls.donationId 

FROM mouPrnHeader AS prnHdr,mouPrnDetails AS prnDtls
WHERE prnHdr.id = prnDtls.mouPrnHeaderId;

