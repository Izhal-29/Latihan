-- Latihan ---

-- Ubahlah CustomerName menjadi nama pertama dari CustomerName pada table Customer dimana Customer tersebut pernah melakukan transaksi pada tanggal 21. Kemudian tampilkan seluruh data Customer
SELECT * FROM Customer
SELECT * FROM HeaderSellTransaction

BEGIN TRAN
UPDATE Customer
SET CustomerName = LEFT(CustomerName, CHARINDEX(' ',CustomerName)-1)
FROM Customer cs, HeaderSellTransaction hst
WHERE cs.CustomerID = hst.CustomerID AND DATENAME(DAY,TransactionDate) = 21
ROLLBACK

-- Ubahlah PaymentType menjadi "Hutang" untuk setiap transaksi yang dilakukan oleh Customer CU001
BEGIN TRAN
UPDATE HeaderSellTransaction
set	PaymentType = 'Hutang'
FROM  Customer cs, HeaderSellTransaction hst
WHERE cs.CustomerID = hst.CustomerID AND cs.CustomerID = 'CU001'
ROLLBACK

-- Hapus data Staff yang memiliki Salary dibawah 7.000.000.kemudian Tamilkan Seluruh data dari tabel Staff
SELECT * FROM Staff
BEGIN TRAN
DELETE FROM Staff WHERE StaffSalary < 7000000
ROLLBACK

-- Tampilkan TransactionDate, CustomerName, ItemName, Discount (didapat dari 20% price) dan PaymentType dimana transaksi terjadi pada tanggal 22

BEGIN TRAN
SELECT TransactionDate, CustomerName, ItemName, [Discount] = 0.2 * Price, PaymentType FROM Customer cs, HeaderSellTransaction hst, DetailSellTransaction dst, Item im
WHERE cs.CustomerID = hst.CustomerID AND hst.TransactionID = dst.TransactionID AND dst.ItemID = im.ItemID AND DATENAME (DAY,TransactionDate) = 22
ROLLBACK