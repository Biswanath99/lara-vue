
DROP VIEW IF EXISTS lvhPrnView;

CREATE VIEW  lvhPrnView AS SELECT

prnHdr.id lvhPrnHeaderPrimaryId,
prnHdr.prnId lvhPrnHeaderGenId,
prnHdr.prnType,
prnHdr.prnDate,
prnHdr.prnBookedUnder,
prnHdr.prnDonorId,
prnHdr.prnDonationId,
prnHdr.totalPrnAmount,
prnHdr.prnPaymentMode,
prnHdr.prnPaymentRemarks,
prnHdr.lvhPrnHeaderBudgetHeadSlNo,
prnHdr.lvhPrnHeaderBudgetHead,
prnHdr.lvhPrnHeaderPSCMName,
prnHdr.lvhPrnHeaderProjectNo,
prnHdr.lvhPrnHeaderProjectName,
prnHdr.lvhPrnHeaderBenfCount,
prnHdr.lvhPrnHeaderApprovedGrantAmt,
prnHdr.lvhPrnHeaderDelayReason,
prnHdr.lvhPrnHeaderSchPayment,
prnHdr.lvhPrnHeaderCurrenrTranch,
prnHdr.prnPaymentDetailsFile,

prnDtls.id lvhPrnDetailsPrimaryId,
prnDtls.lvhPrnDetailsBenfFName,
prnDtls.lvhPrnDetailsBenfLName,
prnDtls.lvhPrnDetailsBankName,
prnDtls.lvhPrnDetailsBankAcNo,
prnDtls.lvhPrnDetailsBankIfsc,
prnDtls.lvhPrnDetailsAmount,
prnDtls.lvhPrnHeaderId lvhPrnDetailsHeaderForeignId,
prnDtls.lvhProjectBenfTranchId,
prnDtls.donationId donationId 


FROM lvhPrnHeader AS prnHdr,lvhPrnDetails AS prnDtls
WHERE prnHdr.id = prnDtls.lvhPrnHeaderId;

