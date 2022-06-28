--Advanced Function

--CAST => CAST(nama_kolom AS tipe _data_yang_diinginkan) | untuk merubah data dari suatu kolom
SELECT [Gaji] = 'Rp. ' + CAST(StaffSalary AS VARCHAR) FROM Staff

--CONVERT => CONVERT (tipe_data_yang_diinginkan, nama_kolom, kode_tujuan) | Merubah Format Tanggal, untuk melihat kode tujuannya ketik CONVERT lalu tekan F1
SELECT [Tanggal yang sudah di-convert] = CONVERT(varchar, TransactionDate, 107) FROM HeaderSellTransaction

