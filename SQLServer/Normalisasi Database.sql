-- Normaslisasi
-- 1NF - mengelompokkan beberapa tipe data atu kelompok data yang sejenis agar dapat dipisah sehingga anomali data dapat diiatasi
-- 2NF - Partial Dependency - menghilangkan partial di dependency
-- 3NF - Transitive Dependency - menghilangkan Transitive di dependency
-- 4NF,5NF


---- Transaksi ----
-- UNF :
--> Transaction(TransactionID, TransactionDate, PaymentType, CostumerID, CostumerName, CostumerAddress,{No, ItemID, ItemName, ItemType, ItemPrice, SellQuantity, SubTotal}, Total, StaffName, StaffPosition)

-- 1NF :
-- Hapus Kolom yang didapatkan dari hasil perhitungan
-- hapus kolom yang tidak diperlukan
-- pisahkan data yang berulang
-- tambah primary key

--> HeaderTransaction (TransactionID [PK], TransactionDate, PaymentType, CostumerID, CostumerName, CostumerAddress, StaffName, StaffPosition)
--> DetailTransaction (TransactionID [PK][FK], ItemID [PK], ItemName, ItemType, ItemPrice, SellQuantity)


-- 2NF :
-- Pisahkan data yang bergantung pada sebagaian PK (Partial Dependency)

--> HeaderTransaction (TransactionID [PK], TransactionDate, PaymentType, CostumerID, CostumerName, CostumerAddress, StaffName, StaffPosition)
--> DetailTransaction (TransactionID [PK][FK], ItemID [PK][FK] SellQuantity)
--> Item (ItemID [PK], ItemName, ItemType, ItemPrice)


-- 3NF :
-- (Transitive Dependency)

--> HeaderTransaction (TransactionID [PK], TransactionDate, PaymentType, CostumerID[FK], StaffID[FK])
--> Costumer (CostumerID [PK], CustomerName, CustomerGender, CustomerPhone, CustomerEmail, CustomerDOB, CustomerPassword, CustomerAddress)
--> Staff (StaffID [PK], StaffName, StaffPositionID [FK])
--> StaffPosition (StaffPositionID [PK], StaffPostionName)
--> DetailTransaction (TransactionID [PK][FK], ItemID [PK][FK] SellQuantity)
--> Item (ItemID [PK], ItemName, ItemTypeID[FK], ItemPrice)
--> ItemType(ItemTypeID[PK], ItemTypeName)


---- Registrasi ----
-- UNF :
--> Registrasi(RegistrationID, RegistrationDate, CustomerID, CustomerName, CustomerGender, CustomerAddress, CustomerPhone, CustomerEmail, CustomerDOB, StaffName, StaffPosition)

-- 1NF :
-- Hapus Kolom yang didapatkan dari hasil perhitungan
-- hapus kolom yang tidak diperlukan
-- pisahkan data yang berulang
-- tambah primary key

--> Registrasi(RegistrationID [PK], RegistrationDate, CustomerID, CustomerName, CustomerGender, CustomerAddress, CustomerPhone, CustomerEmail, CustomerDOB, StaffName, StaffPosition)


-- 2NF :
-- Pisahkan data yang bergantung pada sebagian PK (Partial Dependency)

--> Registrasi(RegistrationID [PK], RegistrationDate, CustomerID, CustomerName, CustomerGender, CustomerAddress, CustomerPhone, CustomerEmail, CustomerDOB, StaffName, StaffPosition)


-- 3NF :
-- (Transitive Dependency)

--> Registrasi(RegistrationID [PK], RegistrationDate, CustomerID [FK], StaffID [FK])
--> Customer (CustomerID [PK], CustomerName, CustomerGender, CustomerAddress, CustomerPhone, CustomerEmail, CustomerDOB)
--> Staff (StaffID [PK], StaffName, StaffPositionID [FK])
--> StaffPosition (StaffPositionID [PK], StaffPostionName)


--- Pengabungan Transaksi & Registrasi ---

--> HeaderTransaction (TransactionID [PK], TransactionDate, PaymentType, CostumerID[FK], StaffID[FK])
--> Costumer (CostumerID [PK], CustomerName, CustomerGender, CustomerPhone, CustomerEmail, CustomerDOB, CustomerPassword, CustomerAddress)
--> Staff (StaffID [PK], StaffName, StaffPositionID [FK])
--> StaffPosition (StaffPositionID [PK], StaffPostionName)
--> DetailTransaction (TransactionID [PK][FK], ItemID [PK][FK] SellQuantity)
--> Item (ItemID [PK], ItemName, ItemTypeID[FK], ItemPrice)
--> ItemType(ItemTypeID[PK], ItemTypeName)
--> Registrasi(RegistrationID [PK], RegistrationDate, CustomerID [FK], StaffID [FK])