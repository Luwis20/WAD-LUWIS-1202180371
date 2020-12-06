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
		.column2 {
			width: 100%;
			background-color: #f1f1f1;
			padding: 0 10%;
		}
		.tengah{
			padding: 0 30px;
		}
		.column {
		  float: left;
		  width: 50%;
		  padding: 15px 4px;
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
		    margin: 0 30%;
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
		.column2 {   
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
		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: #fefefe;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		  height: 580px;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		input[type=text],[type=date],[type=time],[type=number], select, textarea {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=submit] {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}
		input[type="file"] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		.tourow{
			width: 48%;
    		float: left;
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
		  <p>Detail Event!</p>
		</div>
		<div class="column2">
			<?php 
				include "koneksi.php";
				$ID=$_GET['id'];
      			$sql = "SELECT * FROM event WHERE id='$ID'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) { 
					$checked = explode(', ', $row['benefit']);
				  	?>
				    <div class="card">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<h2><?php echo($row["name"]);?></h2>
							<h4>Deskripsi</h4>
							<p><?php echo($row["deskripsi"]);?></p>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["tanggal"]);?></p>
								<p><?php echo($row["tempat"]);?></p>
								<p><?php echo($row["mulai"]);?>&nbsp;&nbsp;<?php echo($row["berakhir"]);?></p>
							</div>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["benefit"]);?></p>
							</div>
							<br>
							<div style="width: 100%;">
								<p><b>Kategori:</b> <?php echo($row["kategori"]);?></p>
								<h4>HTM Rp.<?php echo($row["harga"]);?></h4>								
							</div>
						</div>
						<div class="button">
							<button class="btn-blue" id="myBtn">Edit</button>
							<a href="delete.php?id=<?=$row['id']?>"><button class="btn-red">Delete</button></a>
						</div>
				    </div>
				    <div id="myModal" class="modal">

					  <!-- Modal content -->
					<div class="modal-content">
					    <span class="close">&times;</span>
					    <p>Edit Content Events</p>

						<form action="ubah.php" method="POST" enctype="multipart/form-data" class="tengah">
							<input type="hidden" name="id" value="<?php echo($row["id"]);?>">
								<div class="column">
									<h2 style="background: #DC3545;color:#DC3545;border-radius: 4px;">.</h2>
								    <label for="fname">Name</label>
								    <input type="text" id="fname" name="name" value="<?php echo($row["name"]);?>" placeholder="Your name..">

								    <label for="dek">Deskripsi</label>
								    <textarea id="dek" name="deskripsi" ><?php echo($row["deskripsi"]);?></textarea>

								    <label for="myfile">Upload Gambar</label>
				  					<input type="file" id="myfile" name="upload">
								  	
								  	<label for="kat">Kategori</label>
								  	<div style="margin: 8px 0;">
									  	<input type="radio" name="kategori" value="Online" <?php echo ($row["kategori"]=="Online") ? 'checked="checked"' : '' ;?>>Online&nbsp;&nbsp;
									  	<input type="radio" name="kategori" value="Offline" <?php echo ($row["kategori"]=="Offline") ? 'checked="checked"' : '' ;?>>Offline
									</div>
								</div>

								<div class="column">
									<h2 style="background: #007BFF;color:#007BFF;border-radius: 4px;">.</h2>
									<label for="ttl">Tanggal</label>
								    <input type="date" id="ttl" name="tgl" value="<?php echo($row["tanggal"]);?>">

								    <div class="tourow" style="margin-right: 4%">
								    	<label for="jm">Jam Mulai</label>
									    <input type="time" id="jm" name="jm" value="<?php echo($row["mulai"]);?>">
								    </div>
								    <div class="tourow">
								    	<label for="jb">Jam Berakhir</label>
									    <input type="time" id="jb" name="jb" value="<?php echo($row["berakhir"]);?>">
								    </div>

								    <label for="tmp">Tempat</label>
								    <input type="text" id="tmp" name="tempat" value="<?php echo($row["tempat"]);?>">

								    <label for="hrg">Harga</label>
								    <input type="number" id="hrg" name="Harga"  value="<?php echo($row["harga"]);?>">

								    <label for="hrg">Benefit</label>
								    <div style="margin: 8px 0;">
									    <input type="checkbox" name="benefit[]" value="Snacks" <?php in_array ('Snacks', $checked) ? print "checked" : ""; ?>>&nbsp;Snacks&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Sertifikat" <?php in_array ('Sertifikat', $checked) ? print "checked" : ""; ?>>&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Souvenir" <?php in_array ('Souvenir', $checked) ? print "checked" : ""; ?>>&nbsp;Souvenir
								    </div>
									<div class="button" >
										<button type="submit" name="simpan" class="btn-blue">Submit</button>
										<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
									</div>
								</div>
						</form>
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
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>