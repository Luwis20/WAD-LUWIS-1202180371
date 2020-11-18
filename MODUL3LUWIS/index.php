<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			padding: 5px;
			background: #f1f1f1;
		}

	  	.header {
		  padding: 30px;
		  text-align: center;
		  color: #0078B7;
		}

		.topnav {
			padding: 0 20px;
			height: 50px;
			overflow: hidden;
			background-color: #0078B7;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			vertical-align: middle;
			text-align: center;
			margin-top: 7px;
			padding: 8px 16px;
			text-decoration: none;
		}


		/* column */
		.column {
			width: 100%;
			background-color: #f1f1f1;
			padding: 0 10%;
		}

		/* Fake image */
		.fakeimg {
			background-color: #aaa;
			width: 100%;
			height:200px;
		}

		/* Add a card effect for articles */
		.card {
			border: 1px solid #E1E1E1;
			background-color: white;	    
			margin-top: 20px;
			margin-right: 5px;
			width: 22%;
			float: left;
		}
		.text{
			padding: 0 20px;
		}
		.button{
			text-align: right;
			padding: 20px;
			border-top: 1px solid #E1E1E1;
		}

		.btn-red{
			background-color: #DC3545;
		    border: none;
		    color: white;
		    padding: 6px 18px;
		    border-radius: 7%;
		}

		.btn-blue{
			background-color: #027BFC;
		    border: none;
		    color: white;
		    padding: 6px 18px;
		    border-radius: 7%;
		}

		/* Clear floats after the columns */
		.row{
			padding-bottom: 20px;
			border: 1px solid #0078B7;
		}
		.row:after {
			content: "";
			display: table;
			clear: both;
		}


		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 800px) {
		.column {   
		  width: 100%;
		  padding: 0;
		}
		}

		/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
		@media screen and (max-width: 400px) {
		.topnav a {
		  float: none;
		  width: 100%;
		}
		}
	</style>
</head>
<body>
	<div class="topnav">
	  <a href="#">EAD EVENTS</a>
	  <a href="tambah.php" style="float:right;border-radius: 5%;border:1px solid white;">Buat Events</a>
	  <a href="index.php" style="float:right">Home</a>
	</div>

	<div class="row">
		<div class="header">
		  <p>WELCOME TO EAD EVENTS</p>
		</div>
		<div class="column">
			<?php 
				include "koneksi.php";
				$sql = "SELECT * FROM event";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_asoc()) {?>
				    <div class="card">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<h2><?php echo($row["name"]);?></h2>
							<p><?php echo($row["tanggal"]);?></p>
							<p><?php echo($row["tempat"]);?></p>
							<p>Kategori : <?php echo($row["kategori"]);?></p>
						</div>
						<div class="button">
							<a href="detail.php?id=<?=$row['id']?>"><button class="btn-blue">Detail</button></a>
						</div>
				    </div>
				    <?php
				  }
				} else {
				  echo "No Event Found";
				}
				$conn->close();
			?>	    
		</div>
	</div>
</body>
</html>