--Date Function / Fungsi Tanggal/Waktu


--Interval = Day, Weekday, Month, Year

--DATENAME => DATENAME(Interval, Date)
SELECT DATENAME(YEAR, TransactionDate) FROM HeaderSellTransaction
SELECT DATENAME(YEAR, '1945/08/17') FROM HeaderSellTransaction
SELECT DATENAME(WEEKDAY, '1945/08/17') FROM HeaderSellTransaction
SELECT DATENAME(DAY, TransactionDate) FROM HeaderSellTransaction
SELECT DATENAME(WEEKDAY, TransactionDate) FROM HeaderSellTransaction

--DATEDIFF => DATEDIFF(Interval, Tanggal_pertama, Tanggal_Kedua)
SELECT DATEDIFF (YEAR, '1945/08/17','2022/08/17')
SELECT DATEDIFF (DAY, '1945/08/17','2022/08/17')
SELECT DATEDIFF (WEEKDAY, '1945/08/17','2022/08/17')
SELECT DATEDIFF (MONTH, '1945/08/17','2022/08/17')

--DATEADD => DATEADD(Interval, Mau_Tambah_Berapa, Date)
SELECT DATEADD (DAY, 3, '1945/08/17')
SELECT DATEADD (YEAR, 3, '1945/08/17')