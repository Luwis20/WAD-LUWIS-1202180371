<?php 
include_once('db_connect.php');
$database = new database();
if (isset($_POST['pilihannavbar'])) {
setcookie("warna",$_POST['pilihannavbar']);
}

session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
$iduser = $_SESSION['iduser'];
// error_reporting(0);
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
    <title>Profile</title>

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


      .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {background-color: #ddd;}

      .dropdown:hover .dropdown-content {display: block;}

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
  <nav class="navbar navbar-expand-md navbar-dark" style="position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    height: 50px;
    background-color: <?php echo $_COOKIE['warna'];?>">
  <a class="navbar-brand" href="index.php">WAD Beauty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
      </li>
    </ul>
    <a href="cart.php"><img src="assets/Icon Keranjang.png" style="width: 20px;"></a>
    <div class="dropdown">
      <label class="dropbtn">Selamat datang, <?php echo $_SESSION['nama'];?></label>
      <div class="dropdown-content">
        <a href="profil.php">Profile</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>

  </div>
</nav>
      <div class="alert alert-success alert-dismissable" id="alertberhasil">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil Diupdate!
      </div>
      <div class="alert alert-success alert-dismissable" id="alertgagal">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Gagal Diupdate!
      </div>
  <form class="form-signin" method="post" action="#" style="background-color: white; margin-top: 100px;">


  <h1 class="h3 mb-3 font-weight-normal">Profile</h1><hr/>
  <label style="margin-left: -250px;">Email</label>
  <input type="text" id="email" class="form-control" value="<?php echo $_SESSION['email'];?>" name="email" required disabled>
  <label style="margin-left: -84%;">Nama</label>
  <input type="text" id="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $_SESSION['nama'];?>" name="nama" required autofocus>
  <label style="margin-left: -60%;">No. Handphone</label>
  <input type="number" id="nohp" class="form-control" placeholder="Masukkan nomor handphone" value="<?php echo $_SESSION['nohp'];?>" name="nohp" required>
  <label style="margin-left: -72%;">Kata Sandi</label>
  <input type="password" id="pass" class="form-control" placeholder="Buat kata sandi" name="pass" required>
  <label style="margin-left: -48%;">Konfirmasi Kata Sandi</label>
  <input type="password" id="conpass" class="form-control" placeholder="Konfirmasi kata sandi" name="conpass" required>

  <label style="margin-left: -45%;">Warna Navbar</label>
  <select name="pilihannavbar">
    <option value="Black">Dark</option>
    <option value="Gold">Light</option>
  </select>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  <!-- <p class="mt-5 mb-3 text-muted">Warung Belajar &copy; 2019</p> -->
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  
  if ($_POST['pass'] == $_POST['conpass']) {
    if(mysqli_query($database->koneksi, "update user set nama = '".$_POST['nama']."', no_hp = '".$_POST['nohp']."', password = '".$_POST['pass']."' where email = '".$_SESSION['email']."'") or die(mysqli_error())){
      // $_SESSION['warna'] = $_POST['pilihannavbar'];
      
      $alert = '"#alertberhasil"';
    }
  }elseif ($_POST['pass'] != $_POST['conpass']){
      $alert = '"#alertgagal"';
  }?>
      <script type='text/javascript'> 
        $(function() {

           $(<?php echo $alert; ?>).show();
           setTimeout(function(){ $(<?php echo $alert; ?>).hide(); }, 2000);
        });
      </script>
<?php }?>