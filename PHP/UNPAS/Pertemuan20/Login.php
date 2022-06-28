<?php 
  session_start();
  require "function.php";
  // cek cookie
  // if(isset($_COOKIE['id'])){
  //   if($_COOKIE['login'] == 'true'){ // isinya true atau bukan
  //     $_COOKIE['login'] = true; // set sessionnya jadi true
  //   }
  // }
  if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id =$id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan ussername
    if($key === hash('sha256', $row['username'])){
      $_SESSION['login'] = true;
    }
  }

  // cek session
  if(isset($_SESSION["login"])){
    header("location:index.php");
    exit;
  }


  //cek apakah tombol submit atau belum
  if(isset($_POST["login"])){//apakah login sudah ditekan atau belum
    // masukkan kedalam variabel
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek username ada ngga username tertentu di dalam database
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){// jika hasilnya sama dengan 1 
      // untuk hitung ada berapa baris yang dikembalikan dari fungsi SELECT, kalau ketemu nilainya 1, kalau tidak ada nilainya 0

      //cek password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])){
        // mengecek dari string itu sama tidak dengan hash-nya kalau sama berarti passwordnya benar, parameternya ada 2 : (string yang belum di acak (hash) , string yang sudah diacak (hash))

        // cek Session
        $_SESSION["login"] = true;

        // cek remember me
        if(isset($_POST['remember'])){
          //buat cookie

          setcookie('id',$row['id'], time() + 60);
          setcookie('key',hash('sha256', $row ['username']), time() + 60); // mengacak username menggunakan hash sha256
        }

        header("Location:Index.php"); // arahkan/redirect ke Index.php
        exit; // agar berhenti/keluar dsini
      }
    }
    $error = true;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Halaman Login</title>
</head>
<body>
  <h1>Halaman Login</h1>

 <?php if(isset($error)) : ?>   <!-- kalau ada error maka-->
      <p style="color: red; font-style:italic;">Username / Password salah</p>
  <?php endif; ?>

  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>
</html>