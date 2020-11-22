<?php 
include_once('db_connect.php');
$database = new database();
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .alert{
          display: none;
          margin-top: -61%;
          position: fixed;
          width: 100%;
      }
    </style>
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
    <body class="text-center" style="background-color: aliceblue;">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">WAD Beauty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
    </ul>
        <a href="register.php">Register</a>&nbsp;&nbsp;&nbsp;
        <a href="login.php">Login</a>


  </div>
</nav>
      <div class="alert alert-success alert-dismissable" id="alertberhasil">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil Registrasi!
      </div>
      <div class="alert alert-success alert-dismissable" id="alertgagal">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Gagal Registrasi!
      </div>
    <form class="form-signin" method="post" action="#" style="background-color: white;margin-top: 80px;">


  <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1><hr/>
  <label style="margin-left: -250px;">Nama</label>
  <input type="text" id="nama" class="form-control" placeholder="Masukkan nama lengkap" name="nama" required autofocus>
  <label style="margin-left: -250px;">E-mail</label>
  <input type="text" id="email" class="form-control" placeholder="Masukkan alamat e-mail" name="email" required>
  <label style="margin-left: -180px;">No. Handphone</label>
  <input type="number" id="nohp" class="form-control" placeholder="Masukkan nomor handphone" name="nohp" required>
  <label style="margin-left: -220px;">Kata Sandi</label>
  <input type="password" id="pass" class="form-control" placeholder="Buat kata sandi" name="pass" required>
  <label style="margin-left: -150px;">Konfirmasi Kata Sandi</label>
  <input type="password" id="conpass" class="form-control" placeholder="Konfirmasi kata sandi" name="conpass" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="daftar">Daftar</button>
  Sudah punya akun?
  <a href="login.php">Login</a>
  <!-- <p class="mt-5 mb-3 text-muted">Warung Belajar &copy; 2019</p> -->
</form>
</body>
</html>
<?php
if (isset($_POST['daftar'])) {
  if ($_POST['pass'] == $_POST['conpass']) {

    if($masuk = $database->register($_POST['nama'], $_POST['email'], $_POST['nohp'], $_POST['pass'])){
      $alert = '"#alertberhasil"';
    }
  }elseif ($_POST['pass'] != $_POST['conpass']){
      $alert = '"#alertgagal"';
  }?>
      <script type='text/javascript'> 
        $(function() {
           $(<?php echo $alert; ?>).show();
           setTimeout(function(){ $(<?php echo $alert; ?>).hide(); }, 2000);
        })
      </script>
<?php }
?>
