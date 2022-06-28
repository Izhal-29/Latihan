-- View --> mmebuat alias dari beberapa baris code
-- Virtual Table


SELECT * FROM Staff WHERE StaffGender = 'Male'

-- Membuat View
CREATE VIEW [list Staff Male] AS
SELECT * FROM Staff WHERE StaffGender = 'Male'


-- Memanggil View
SELECT * FROM [list Staff Male] 

-- menghapus View
DROP VIEW [List Staff Male]

CREATE VIEW [List Staff Female] AS
SELECT * FROM Staff WHERE StaffGender = 'Female'

ALTER VIEW [List Staff Female] AS 
SELECT [Nama Depan] = LEFT (StaffName, CHARINDEX(' ', StaffName)-1), [Gender] = LEFT (StaffGender,1)
FROM Staff
WHERE StaffGender = 'Female'

SELECT * FROM [List Staff Female] 