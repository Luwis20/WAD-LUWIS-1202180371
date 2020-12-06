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
		  padding: 30px 30px 0 30px;
		  text-align: left;
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
		.tengah{
			padding: 0 30px;
		}
		.column {
		  float: left;
		  width: 50%;
		  padding: 15px 4px;
		}
		.button{
			text-align: right;
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
		  <h2>Buat Event!</h2>
		</div>
		<form action="simpan.php" method="POST" enctype="multipart/form-data" class="tengah">
			<div class="column">
				<h2 style="background: #DC3545;color:#DC3545;border-radius: 4px;">.</h2>
				    <label for="fname">Name</label>
				    <input type="text" id="fname" name="name" placeholder="Your name..">

				    <label for="dek">Deskripsi</label>
				    <textarea id="dek" name="deskripsi" ></textarea>

				    <label for="myfile">Upload Gambar</label>
  					<input type="file" id="myfile" name="upload">
				  	
				  	<label for="kat">Kategori</label>
				  	<div style="margin: 8px 0;">
					  	<input type="radio" name="kategori" value="Online" checked="checked">Online&nbsp;&nbsp;
					  	<input type="radio" name="kategori" value="Offline" >Offline
					</div>
			</div>

			<div class="column">
				<h2 style="background: #007BFF;color:#007BFF;border-radius: 4px;">.</h2>
				<label for="ttl">Tanggal</label>
			    <input type="date" id="ttl" name="tgl" >

			    <div class="tourow" style="margin-right: 4%">
			    	<label for="jm">Jam Mulai</label>
				    <input type="time" id="jm" name="jm">
			    </div>
			    <div class="tourow">
			    	<label for="jb">Jam Berakhir</label>
				    <input type="time" id="jb" name="jb">
			    </div>

			    <label for="tmp">Tempat</label>
			    <input type="text" id="tmp" name="tempat" >

			    <label for="hrg">Harga</label>
			    <input type="number" id="hrg" name="Harga" >

			    <label for="hrg">Benefit</label>
			    <div style="margin: 8px 0;">
				    <input type="checkbox" name="benefit[]" value="Snacks">&nbsp;Snacks&nbsp;&nbsp;&nbsp;
				    <input type="checkbox" name="benefit[]" value="Sertifikat">&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
				    <input type="checkbox" name="benefit[]" value="Souvenir">&nbsp;Souvenir
			    </div>
				<div class="button" >
					<button type="submit" name="simpan" class="btn-blue">Submit</button>
					<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>