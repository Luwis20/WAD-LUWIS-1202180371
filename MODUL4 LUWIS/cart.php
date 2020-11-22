<?php 
include_once('db_connect.php');

$database = new database();
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
$iduser = $_SESSION['iduser'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cart</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">


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
          margin-top: -2%;
          position: fixed;
          width: 100%;
      }

      /*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/

    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
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
      <label class="dropbtn">Welcome, <?php echo $_SESSION['nama']; ?></label>
      <div class="dropdown-content">
        <a href="profil.php">Profile</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>

  </div>
</nav>
      <div class="alert alert-success alert-dismissable" id="alertberhasil">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil Dihapus!
      </div>
<main role="main" class="container">
<center>
  <div class="starter-template">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>         
          </tr>
        </thead>

        <tbody>
          <?php
            $no = 1;
            $total = 0;
            $getCart = mysqli_query($database->koneksi, "select * from cart where user_id = $iduser");
            while($fetCart = mysqli_fetch_array($getCart)){
              echo "<tr>";
              echo "<td>".$no."</td>";
              echo "<td>".$fetCart['nama_barang']."</td>";
              echo "<td>".number_format($fetCart['harga'],0,"",".")."</td>";
              echo "<td><a class='btn btn-danger' href=cart.php?id=".$fetCart['id']." '>Hapus</a>";
              $no=$no+1;
              $total=$total+$fetCart['harga'];
            }
          ?>
          <tr>
            <td><b>Total</b></td>
            <td></td>
            <td><b><?php echo number_format($total,0,"",".");?></b></td>
            <td></td>
          </tr>
        </tbody>
      </table>  
  </div>
</center>
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
<?php
error_reporting(0);
$idCart = $_GET['id'];
if ($idCart !== null) {

mysqli_query($database->koneksi, "delete from cart where id = '$idCart'");
?>
      <script type='text/javascript'> 
        $(function() {
           $('#alertberhasil').show();
           setTimeout(function(){ $('#alertberhasil').hide(); }, 2000);
           setTimeout(function() {
              window.location.replace("cart.php");
            }, 2000);
        });
      </script>
<?php } ?>      