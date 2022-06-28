-- role & Permission

-- admin, bisa melakukan segala hal pada semua tabel

-- user, hanya bisa select pada tabel item

-- 1. Membuat login
-- Security -> Login -> Klik Kanan pilih New Login
-- Pilih General -> pada login Name masukkan nama User -> pilih SQL Server Authentication -> Masukkan Password -> hilangkan tanda pada enforce password policy -> pilih OK

-- 2. memberikan permission
-- pilih Database -> pilih tables -> klik kanan nama table (dbo.----) -> pilih propeties -> pilih permission
-- pilih search -> pilih browse -> lalu pilih user yang akan digunakan -> lalu OK 2x -> pada bagian permission for (nama user)
-- atur permission
-- untuk dapat melakukan semuanya centang semua pada column grant

-- untuk beberapa saja pilih yang mau diberikan permission lalu klik column permission untuk lebih detailnya
-- lalu atur column apa saja yang dapat diakses oleh user tersebut jika ada columny yang tdk ingin diakses centang bagian deny