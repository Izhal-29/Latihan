-- HAVING --> WHERE versi Agregat

SELECT * FROM Item
SElECT ItemTypeID, SUM(Quantity) FROM Item
GROUP BY ItemTypeID


-- Menampilkan ItemTypeID yang Quantity-nya Lebih dari 100
SELECT ItemTypeID 
FROM Item 
GROUP BY ItemTypeID
Having SUM(Quantity) > 100