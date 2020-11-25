<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}

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
    <title>Login Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

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
          margin-top: -39%;
          position: fixed;
          width: 100%;
      }
    </style>

    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color: aliceblue;">
    <div class="alert alert-success alert-dismissable" id="alertberhasil">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil Login!
    </div>

    <div class="alert alert-success alert-dismissable" id="alertgagal">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Gagal Login
    </div>

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

    <form class="form-signin" method="post" action="#">
  <h1 class="h3 mb-3 font-weight-normal">Login</h1><hr/>


  <label style="margin-left: -250px;">E-Mail</label>
  <input type="text" id="email" class="form-control" placeholder="Email" name="email" value="<?php 
  if(isset($_COOKIE["remember"]))
  {
    if(isset($_COOKIE["email"])){
      echo $_COOKIE["email"];
    }else{

    }
  }
?>" required autofocus>
  <label style="margin-left: -220px;">Kata Sandi</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" value="<?php 
  if(isset($_COOKIE["remember"]))
  {
    if(isset($_COOKIE["password"])){
      echo $_COOKIE["password"];
    }else{
      
    } 
  }
?>" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" style="margin-left: -180px;" value="remember-me" name="remember"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
  Belum punya akun?
  <a href="register.php">Register</a>
  
</form>
</body>
</html>

<?php

if(isset($_POST['login']))
{
    $email = $_POST['email']; 
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
    
    if($database->login($email,$password,$remember))
    {
      $alert = '"#alertberhasil"';
    }else{
      $alert = '"#alertgagal"';
    }
    ?>
      <script type='text/javascript'> 
        $(function() {
           $(<?php echo $alert; ?>).show();
            setTimeout(function() {
              window.location.replace("index.php");
            }, 1000);
        })
      </script>

<?php }

?>