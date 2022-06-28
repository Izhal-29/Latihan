------ insert
SELECT * FROM Customer

------ transaction
-- BEGIN TRANSACTION
------ Perintah2
-- rollback --> perintahnya tidak disave
-- commit --> perintahnya kita save
BEGIN TRANSACTION
INSERT INTO Customer VALUES
('CU006','Alex', 'Male', '123123123','Jalan Bungan')
COMMIT

-- menambahkan data dalam sebuah tabel tetapi hanya 2 column yang diisi/ditambahkan
BEGIN TRANSACTION
INSERT INTO Customer (CustomerID, CustomerName) VALUES
('CU007','Alexa')
ROLLBACK


--menambahkan data disemua column dalam sebuah tabel
BEGIN TRANSACTION
INSERT INTO Customer VALUES
('CU007','Putri','Female','123123123','Jalan Kelopak')
commit


-- menambahakan data disemua column lebih dari 1 dalam sebuah tabel
BEGIN TRANSACTION
INSERT INTO Customer VALUES
('CU008','Rais','Male','080808','Jalam Melrose'),
('CU009','Yoga','Male','090909','Jalan Melrose')
COMMIT