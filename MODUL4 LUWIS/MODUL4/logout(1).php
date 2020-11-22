<!DOCTYPE html>
<html>
<head>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		.alert{
          display: none;
          margin-top: -1px;
          position: fixed;
          width: 100%;
      }
	</style>
</head>
<body>
	<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" onclick="close()" aria-hidden="true">&times;</button>
            Berhasil Logout!
    </div>
</body>
</html>
<?php 
session_start();
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
setcookie('nama', '', 0, '/');
// header('location:login.php');
?>
	<script type='text/javascript'> 
        $(function() {
           $('.alert').show();
            setTimeout(function() {
              window.location.replace("login.php");
            }, 1700);
        })
    </script>