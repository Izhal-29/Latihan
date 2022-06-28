--Match Function / Fungsi Matematika

--MAX
SELECT [Gaji Terbesar] = MAX(StaffSalary) FROM Staff

--MIN
SELECT [Gaji Terkecil] = MIN(StaffSalary) FROM Staff

--AVG
SELECT [Rata2 Gaji] = AVG(StaffSalary) FROM Staff

--COUNT
SELECT COUNT(TransactionID) FROM HeaderSellTransaction

--SUM
SELECT [Total Gaji] = SUM(StaffSalary) FROM Staff