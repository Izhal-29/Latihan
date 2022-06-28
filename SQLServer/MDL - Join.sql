-- JOIN

SELECT CustomerName FROM Customer, HeaderSellTransaction
WHERE DATENAME(DAY, TransactionDate) = 21

-- menmapilkan nama Customer yang bertransaksi pada tgl 21
SELECT CustomerName 
FROM Customer cs, HeaderSellTransaction hst
WHERE cs.CustomerID = hst.CustomerID AND DATENAME(DAY, TransactionDate) = 21