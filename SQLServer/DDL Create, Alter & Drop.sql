CREATE DATABASE eCommerce

use eCommerce
create table Customer(
	CustomerID CHAR (5) NOT NULL PRIMARY KEY,
	CONSTRAINT cekCostumerID CHECK (CustomerID LIKE 'CU[0-9][0-9][0-9]'),

	CustomerName VARCHAR (50) NOT NULL,

	CustomerGender VARCHAR (10),
	CONSTRAINT cekCustomerGender CHECK (CustomerGender = 'Male' or CustomerGender = 'Female'),

	CustomerPhone VARCHAR (13),
	CustomerAddress VARCHAR (100)
)

CREATE TABLE Staff(
	StaffID CHAR (5) NOT NULL PRIMARY KEY,
	CONSTRAINT cekStaffID CHECK (StaffID LIKE 'SF[0-9][0-9][0-9]'),

	StaffName VARCHAR (50) NOT NULL,

	StaffGender VARCHAR (10),
	CONSTRAINT cekStaffGender CHECK (StaffGender = 'Male' or StaffGender = 'Female'),

	StaffPhone VARCHAR (13),
	STaffAddress VARCHAR (100),

	StaffSalary Numeric(11,2),
	StaffPosition Varchar (20)
)

CREATE TABLE ItemType(
	ItemTypeID CHAR (5) NOT NULL PRIMARY KEY,
	CONSTRAINT cekItemTypeID CHECK (ItemTypeID LIKE 'IT[0-9][0-9][0-9]'),

	ItemTypeName VARCHAR (50) NOT NULL
)

CREATE TABLE Item(
	ItemID CHAR (5) NOT NULL PRIMARY KEY,
	CONSTRAINT cekItemID CHECK (ItemID LIKE 'IM[0-9][0-9][0-9]'),

	ItemTypeID CHAR (5) NOT NULL REFERENCES ItemType ON UPDATE CASCADE ON DELETE CASCADE,
	ItemName VARCHAR (15) NOT NULL,
	Price NUMERIC (11,2),
	Quantity INTEGER 
)

CREATE TABLE HeaderSellTransaction(
	TransactionID CHAR (5) NOT NULL PRIMARY KEY,
	CONSTRAINT cekTransactionID CHECK (TransactionID LIKE 'TR[0-9][0-9][0-9]'),

	CustomerID CHAR (5) NOT NULL REFERENCES Customer ON UPDATE CASCADE ON DELETE CASCADE,
	StaffID CHAR (5) NOT NULL REFERENCES Staff ON UPDATE CASCADE ON DELETE CASCADE,
	TransactionDate DATE,
	PaymentType VARCHAR (20)
)

CREATE TABLE DetailSellTransaction(
	TransactionID CHAR (5) NOT NULL REFERENCES HeaderSellTransaction ON UPDATE CASCADE ON DELETE CASCADE,
	ItemID CHAR (5) NOT NULL REFERENCES Item ON UPDATE CASCADE ON DELETE CASCADE,
	SellQuantity INTEGER,
	PRIMARY KEY (TransactionID, ItemID)
)