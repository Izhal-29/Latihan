--SELECT - STRING FUNCTION

--LEFT => LEFT(Nama_kolom, Berapa Digit) mengambil karakter dari kiri
SELECT [Jenis Kelamin] = LEFT(StaffGender,1) FROM Staff

--RIGHT => RIGHT(Nama_Kolom, Berapa Digit) mengambil karakter dari kanan
SELECT [Test Right] = RIGHT(StaffName,2) FROM Staff

--REVERSE => REVERSE(Nama_Kolom) untuk Membalikkan kata
SELECT [Balik Nama] = REVERSE(StaffName) FROM Staff

--CHARINDEX => CHARINDEX('Mau_cari_apa',Nama_kolom) Mencari karakter dalam tabel atau kolom
SELECT [index huruf O] = CHARINDEX('o',StaffName) FROM Staff WHERE StaffPhone = '080152852175'

--SUBSTRING => SUBSTRING(nama_Kolom, start, berapa Digit) mengambil karakter dalam string
SELECT [Index ke2 4 huruf] = SUBSTRING(StaffName,2,4) FROM Staff

--mengambil karakter dalam string sampai spasi dan tidak mengambil spasi jdi ditambahin -1
SELECT [Kata Pertama] = SUBSTRING(StaffName,1, CHARINDEX(' ',StaffName)-1) FROM Staff

--UPPER => UPPER(Nama_Kolom) merubah karakter menjadi huruf besar
SELECT [Nama Huruf Besar] = UPPER(StaffName) FROM Staff

--Lower => LOWER(nama_kolom) merubah karakter menjadi huruf kecil
SELECT [Nama Huruf Besar] = LOWER(StaffName) FROM Staff