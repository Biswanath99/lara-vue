/** schPrnView**/

DROP VIEW IF EXISTS schPrnView;

CREATE VIEW schPrnView AS SELECT
prnHdr.id prnHdrId,
prnHdr.prnId prnHeaderGenId,
prnHdr.prnType prnHeaderType,
prnHdr.prnDate prnHeaderDate,
prnHdr.prnScholarshipTypeValueId prnHeaderScholarshipTypeValueId,
prnHdr.prnBookedUnder prnHeaderBookedUnder,
prnHdr.prnDonorId prnHeaderDonorId,
prnHdr.prnDonationId prnHeaderDonationId,
prnHdr.batchNo prnHeaderbatchNo,
prnHdr.academicYr prnHeaderacademicYr,
prnHdr.totalPrnAmount prnHeaderTotalPrnAmount,
prnHdr.prnPaymentRemarks prnHeaderPrnPaymentRemarks,
prnHdr.prnDocFileName   prnDocFileName,
prnHdr.prnPaymentMode prnHeaderPrnPaymentMode,   
prnHdr.transactionNarration transactionNarration, 
prnHdr.budgetHeadGroup budgetHeadGroup,
prnHdr.budgetHead budgetHead,

prnDtls.id prnDtlsid,
prnDtls.costCenter schPrnDetailsCostCenter,
prnDtls.costCategory schPrnDetailscostCategory,
prnDtls.userId schPrnDetailsUserId,
prnDtls.prnPurpose schPrnDetailsPrnPurpose,
prnDtls.totalPurposeAmount schPrnDetailsTotalPurposeAmount,
prnDtls.prnAmount schPrnDetailsprnAmount,
prnDtls.prnDueDate schPrnDetailsprnDueDate,
prnDtls.prnPreiod schPrnDetailsprnPreiod,
prnDtls.prnBankAcNo schPrnDetailsPrnBankAcNo,
prnDtls.prnBankAcHolderName schPrnDetailsPrnBankAcHolderName,
prnDtls.prnBankName schPrnDetailsPrnBankName,
prnDtls.prnBankBranchName schPrnDetailsPrnBankBranchName,
prnDtls.prnBankIFSC schPrnDetailsPrnBankIFSC,
prnDtls.prnPaymentStatus schPrnDetailsPrnPaymentStatus,
prnDtls.commId schPrnDetailsCommId,
-- prnDtls.transactionType      transactionType,     
-- prnDtls.transactionNarration transactionNarration, 
prnDtls.commNarration        commNarration,        
prnDtls.commPurpose          commPurpose,          
prnDtls.prnRemark            prnRemark,
prnDtls.totalFeesForYear     totalFeesForYear,
prnDtls.donationId donationId,
prnDtls.commDuration commDuration

FROM schPrnHeader AS prnHdr,schPrnDetails AS prnDtls
WHERE prnHdr.id = prnDtls.schPrnHeaderId;

/*schPrnHeader AS prnHdr LEFT OUTER JOIN schPrnDetails AS prnDtls ON prnHdr.id = prnDtls.schPrnHeaderId*/
