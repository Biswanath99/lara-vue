DROP VIEW IF EXISTS humanitarianAidView;
CREATE VIEW humanitarianAidView AS SELECT

ha.id haidPrimaryId,
ha.hAidId haidGenId,
ha.hAidPurpose hAidPurpose,
ha.hAidType hAidType,
ha.amount amount,
ha.quantity quantity,
ha.uom uom,
ha.effectiveDate effectiveDate,
ha.state states,
ha.description description,
ha.filename attachments,

col.colonyName colonyName,

dnr.donorType donorType,
dnr.donorFname donorFname,
dnr.donorLname donorLname,
dnr.donorOrgname donorOrgname,
cr.code currency

FROM hAid AS ha
LEFT OUTER JOIN currencies AS cr ON ha.currencyId = cr.id
JOIN donors    AS dnr
JOIN colony    AS col
WHERE dnr.id = ha.donorId
AND   col.id = ha.colonyId;

 