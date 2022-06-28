-- DELETE
SELECT * from Customer

-- menhapus data yang mempunyai CustomerName = Alex
begin transaction
delete from Customer
where CustomerName = 'Alex'
rollback

-- menghapus data yang costumerPhone = 123123123
begin transaction
delete from Customer
where CustomerPhone = '123123123'
commit

-- menghapus data yang CustomerAddress = Jalan Melrose
begin transaction
delete from Customer
where CustomerAddress = 'Jalam Melrose'
commit


select * from HeaderSellTransaction
-- menhapus dari tabel headerSellTransaction dimana tanggal transactionnya tgl 21
begin transaction
delete from HeaderSellTransaction
where DATENAME(DAY, TransactionDate) = 21
rollback