--Latihan Agregate

-- Tampilkan Maximum Price (didapat dari Price Tertinggi), Minimum Price (Didapat dari Price Terendah) dan Average Price (Didapat dari Rata-rata Price)
SELECT 
[Maximum Price] = MAX(Price), [Minimum Price] = MIN(Price), [Average Price] = AVG(Price)
FROM Item


-- Tampilkan Gender(didapat dari huruf pertama StaffGender) dan Average Salary (didapatkan dari rata-rata StaffSalary dan diawali dengan kata 'Rp.').
-- menampilkan rata-rata salary berdasarkan jenis kelamin
SELECT [Gender] = LEFT(StaffGender,1), [Average Salary] = 'Rp.' + CAST(AVG(StaffSalary) AS VARCHAR)
FROM Staff
GROUP BY StaffGender

-- menampilkan rata-rata Salary berdasarkan Posisi
SELECT StaffPosition, [Average Salary] = AVG(StaffSalary) FROM Staff GROUP BY StaffPosition


-- Tampilkan ItemTypeName, Total Transc\action (didapat dari banyaknya transaksi)
SELECT ItemTypeName, [Total Transaction] = COUNT(TransactionID) FROM DetailSellTransaction dst, Item im, ItemType it
WHERE dst.ItemID = im.ItemID AND im.ItemTypeID = it.ItemTypeID
GROUP BY ItemTypeName


-- Tampilkan TransactionID, dan [Quantity per transaction] (didapatkan dari menjumlahkan quantity yang terjadi pada setiap transaksi)
SELECT TransactionID, [Qty Per Transaction] = SUM(SellQuantity) FROM DetailSellTransaction
GROUP BY TransactionID