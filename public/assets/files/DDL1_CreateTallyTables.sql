create table config
(
 name nvarchar(64) not null primary key,
 value nvarchar(1024)
);
ALTER TABLE config CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_group
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 primary_group nvarchar(1024) not null default '',
 is_revenue tinyint,
 is_deemedpositive tinyint,
 is_reserved tinyint,
 sort_position int
);
ALTER TABLE mst_group CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_ledger
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 is_revenue tinyint,
 is_deemedpositive tinyint,
 opening_balance decimal(17,2) default 0,
 description nvarchar(256) not null default '',
 mailing_name nvarchar(256) not null default '',
 mailing_address nvarchar(1024) not null default '',
 mailing_state nvarchar(256) not null default '',
 mailing_country nvarchar(256) not null default '',
 mailing_pincode nvarchar(64) not null default '',
 email nvarchar(256) not null default '',
 it_pan nvarchar(64) not null default '',
 gstn nvarchar(64) not null default '',
 gst_registration_type nvarchar(64) not null default '',
 gst_supply_type nvarchar(64) not null default '',
 gst_duty_head nvarchar(16) not null default '',
 tax_rate decimal(9,4) default 0,
 bank_account_holder nvarchar(256) not null default '',
 bank_account_number nvarchar(64) not null default '',
 bank_ifsc nvarchar(64) not null default '',
 bank_swift nvarchar(64) not null default '',
 bank_name nvarchar(64) not null default '',
 bank_branch nvarchar(64) not null default ''
);
ALTER TABLE mst_ledger CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_vouchertype
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 is_deemedpositive tinyint,
 affects_stock tinyint
);
ALTER TABLE mst_vouchertype CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


create table mst_uom
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 formalname nvarchar(256) not null default '',
 is_simple_unit tinyint not null,
 base_units nvarchar(1024) not null,
 additional_units nvarchar(1024) not null,
 conversion int not null
);
ALTER TABLE mst_uom CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_godown
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 address nvarchar(1024) not null default ''
);
ALTER TABLE mst_godown CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_stock_group
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default ''
);
ALTER TABLE mst_stock_group CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_stock_item
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 uom nvarchar(1024) not null default '',
 opening_balance decimal(15,4) default 0,
 opening_rate decimal(15,4) default 0,
 opening_value decimal(17,2) default 0,
 gst_nature_of_goods nvarchar(1024) default '',
 gst_hsn_code nvarchar(64) default '',
 gst_taxability nvarchar(1024) default ''
);
ALTER TABLE mst_stock_item CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_cost_category
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 allocate_revenue tinyint,
 allocate_non_revenue tinyint
);
ALTER TABLE mst_cost_category CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_cost_centre
(
 guid varchar(64) not null primary key,
 name nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 category nvarchar(1024) not null default ''
);
ALTER TABLE mst_cost_centre CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_gst_effective_rate
(
 item nvarchar(1024) not null default '',
 applicable_from date,
 hsn_description nvarchar(256) not null default '',
 hsn_code nvarchar(64) not null default '',
 rate decimal(17,2) not null default 0,
 is_rcm_applicable tinyint,
 nature_of_transaction nvarchar(64) not null default '',
 nature_of_goods nvarchar(64) not null default '',
 supply_type nvarchar(64) not null default '',
 taxability nvarchar(64) not null default ''
);
ALTER TABLE mst_gst_effective_rate CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_opening_batch_allocation
(
 item nvarchar(1024) not null default '',
 opening_balance decimal(15,4) default 0,
 opening_rate decimal(15,4) default 0,
 opening_value decimal(17,2) default 0,
 godown nvarchar(1024) not null default '',
 manufactured_on date
);
ALTER TABLE mst_opening_batch_allocation CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table mst_opening_bill_allocation
(
 ledger nvarchar(1024) not null default '',
 opening_balance decimal(17,4) default 0,
 bill_date date
);
ALTER TABLE mst_opening_bill_allocation CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_voucher
(
 guid varchar(64) not null primary key,
 date date not null,
 voucher_type nvarchar(1024) not null,
 voucher_number nvarchar(64) not null default '',
 reference_number nvarchar(64) not null default '',
 narration nvarchar(4000) not null default '',
 party_name nvarchar(256) not null,
 place_of_supply nvarchar(256) not null,
 is_invoice tinyint,
 is_accounting_voucher tinyint,
 is_inventory_voucher tinyint,
 is_order_voucher tinyint
);
ALTER TABLE trn_voucher CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_accounting
(
 guid varchar(64) not null,
 ledger nvarchar(1024) not null default '',
 amount decimal(17,2) not null default 0,
 amount_forex decimal(17,2) not null default 0,
 currency nvarchar(16) not null default ''
);
ALTER TABLE trn_accounting CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_inventory
(
 guid varchar(64) not null,
 item nvarchar(1024) not null default '',
 quantity decimal(15,4) not null default 0,
 rate decimal(15,4) not null default 0,
 amount decimal(17,2) not null default 0,
 additional_amount decimal(17,2) not null default 0,
 discount_amount decimal(17,2) not null default 0,
 godown nvarchar(1024),
 tracking_number nvarchar(1024)
);
ALTER TABLE trn_inventory CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_cost_centre
(
 guid varchar(64) not null,
 ledger nvarchar(1024) not null default '',
 name nvarchar(1024) not null default '',
 amount decimal(17,2) not null default 0
);
ALTER TABLE trn_cost_centre CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_bill
(
 guid varchar(64) not null,
 ledger nvarchar(1024) not null default '',
 name nvarchar(1024) not null default '',
 amount decimal(17,2) not null default 0,
 billtype nvarchar(256) not null default ''
);
ALTER TABLE trn_bill CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_batch
(
 guid varchar(64) not null,
 item nvarchar(1024) not null default '',
 name nvarchar(1024) not null default '',
 quantity decimal(15,4) not null default 0,
 amount decimal(17,2) not null default 0,
 godown nvarchar(1024),
 destination_godown nvarchar(1024),
 tracking_number nvarchar(1024)
);
ALTER TABLE trn_batch CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

create table trn_closingstock_ledger
(
 ledger nvarchar(1024) not null default '',
 parent nvarchar(1024) not null default '',
 stock_date date,
 stock_value decimal(17,2) not null default 0
);
ALTER TABLE trn_closingstock_ledger CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
