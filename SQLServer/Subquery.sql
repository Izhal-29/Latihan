-- Subquery --> Subquery adalah query di dalam query
-- kita bisa menggunakan Subquery untuk me-return atau mengembalikan data yang akan kita gunakan pada query utama


-- in --> in memungkinkan kita untuk menguji apakah value yang kita cari ada di dalam in
SELECT * FROM Staff 
WHERE StaffPosition in ('Cashier','Supervisor')

SELECT * FROM Staff 
WHERE StaffID IN (
		SELECT StaffID
		FROM Staff
		WHERE StaffSalary > 7000000
		)

-- exists --> Exists adalah operator yang bisa kita gunakan untuk mengetahui apakah subquery kita mengembalikan sesuatu atau tidak
SELECT * FROM Staff
WHERE EXISTS(
		SELECT StaffID
		WHERE StaffSalary > 7000000
		)


-- alias subquery --> subquery yang memiliki alias/nama lain
SELECT ItemName, Price FROM Item, (
		SELECT [Rata2] = AVG (Price) FROM Item) as tt
		WHERE Price > tt.Rata2


