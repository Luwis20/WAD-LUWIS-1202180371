<?php 
include_once('db_connect.php');
$database = new database();
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
$iduser = $_SESSION['iduser'];
$ambilData = mysqli_query($database->koneksi, "select * from user where email = '".$_SESSION['email']."'");
$fetData = $ambilData->fetch_array();
?>
<!doctype html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Index</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

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

      .alert{
          display: none;
          margin-top: -1px;
          position: fixed;
          width: 100%;
      }

      .dropdown-content a:hover {background-color: #ddd;}

      .dropdown:hover .dropdown-content {display: block;}

      /*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/

    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark " style="position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    height: 50px;
    background-color: <?php echo $_COOKIE['warna'];?>">
  <a class="navbar-brand" href="index.php" style="height: 50px;">WAD Beauty</a>
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
      <label class="dropbtn">Welcome, <?php echo $fetData['nama']; ?></label>
      <div class="dropdown-content">
        <a href="profil.php">Profile</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>

  </div>
</nav>
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" onclick="close()" aria-hidden="true">&times;</button>
            Berhasil Ditambahkan!
      </div>
<main role="main" class="container">
<center>
  <div class="starter-template">
    <form action="#" method="post">
    <table border="3px" style="margin-top: 6px;">
      <th colspan="3" style="background-image: linear-gradient(to right bottom, #00bae1, #00cae3, #00d8de, #00e6d1, #00f2bd, #41f7a9, #67fa93, #88fd7b, #a2fb64, #bbf74b, #d4f331, #eded09);">
        <h1>WAD Beauty</h1>
        <p>Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
      </th>

      <tr>
        <td style="width: 30%;">
          <img src="assets/Gambar 1.jpg" style="width: 100%;height: 230px;">
          <p>Kiehls Calendula Herbal Extract Toner</p>
          <p style="text-align: justify;">Toner wajah untuk kulit berminyak dan kulit normal telah dipercaya oleh konsumen Kiehl sejak tahun 1960an. Efektif jika diformulasikan dengan ekstrak herbal pilihan untuk membersihkan dengan lembut untuk jenis kulit normal dan berminyak tanpa mengandung alkohol. Calendula Herbal-Extract Toner dapat digunakan untuk meredakan masalah kulit dan memperbaiki kondisi kulit.</p>
          <hr/>
          <p style="text-align: left;">Rp. 169.000</p>
          <hr/>
          <button type="submit" name="btn1" class="btn btn-primary">Tambahkan ke keranjang</button>
        </td>
        <td style="width: 30%;">
          <img src="assets/Gambar 2.jpeg" style="width: 100%;height: 230px;">
          <p>Kiehls Midnight Recovery Concentrate</p>
          <p style="text-align: justify;">Kiehl's Midnight Recovery Concentrate 99.8 berfungsi untuk meregerenasi dan memberbaiki kulit, sehingga kulit tampak lebih muda di keeseokan paginya. Campuran dari tumbuh-tumbuhan dan minyak yang dapat digunakan sebagai pengobatan, penyeimbang, dan antioksidan yang bekerja di malam hari. Bekerja efektif mengembalikan kesehatan kulit dalam semalam. </p>
          <hr/>
          <p style="text-align: left;">Rp. 180.000</p>
          <hr/>
          <button type="submit" name="btn2" class="btn btn-primary">Tambahkan ke keranjang</button>
        </td>
        <td style="width: 30%;">
          <img src="assets/Gambar 3.jpg" style="width: 100%;height: 230px;">
          <p>Calendula Water Serum-Infused Water Cream</p>
          <p style="text-align: justify;">Calendula Water Serum-Infused Water Cream merupakan pelembap terbaru dari Kiehl's yang mengandung partikel daun bunga calendula berukuran mikro dan ekstrak bunga calendula dengan konsentrat tinggi. Pelembap ini diklaim bisa menenangkan kondisi kulit yang kemerahan akibat iritasi, memberikan hidrasi maksimal, mencerahkan dan menghaluskan wajah. Merupakan produk favorit.</p>
          <hr/>
          <p style="text-align: left;">Rp. 108.000</p>
          <hr/>
          <button type="submit" name="btn3" class="btn btn-primary">Tambahkan ke keranjang</button>
        </td>
      </tr>
    </table>
    </form>
  </div>
</center>
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
<?php


if (isset($_POST['btn3'])) {
  $database->addCart("Calendula Water Serum-Infused Water Cream", "108000", $iduser);?>
      <script type='text/javascript'> 
        $(function() {
           $('.alert').show();
           setTimeout(function(){ $('.alert').hide(); }, 2000);
        });
      </script>
<?php
}elseif (isset($_POST['btn2'])) {
  $database->addCart("Kiehls Midnight Recovery Concentrate", "180000", $iduser);?>
      <script type='text/javascript'> 
        $(function() {
           $('.alert').show();
           setTimeout(function(){ $('.alert').hide(); }, 2000);
        });
      </script>
<?php
}elseif (isset($_POST['btn1'])) {
  $database->addCart("Kiehls Calendula Herbal Extract Toner", "169000", $iduser);?>
      <script type='text/javascript'> 
        $(function() {
           $('.alert').show();
           setTimeout(function(){ $('.alert').hide(); }, 2000);
        });
      </script>
<?php      
}
?>
<script type="text/javascript">
  function close(){
    $('.alert').hide();
  }
</script>
