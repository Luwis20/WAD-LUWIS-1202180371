<?php
	if (isset($_POST['simpan'])) {
		include "koneksi.php";
		$id = $_POST['id'];
		$name = $_POST['name'];
		$deskripsi = $_POST['deskripsi'];
		$kategori = $_POST['kategori'];
		$tgl = $_POST['tgl'];
		$jm = $_POST['jm'];
		$jb = $_POST['jb'];
		$tempat = $_POST['tempat'];
		$harga = $_POST['Harga'];

		$for_query = '';
        foreach($_POST["benefit"] as $benefit){
			$for_query .= $benefit . ', ';
        }

        $for_query = substr($for_query, 0, -2);

		
		$filename = $_FILES['upload']['name'];
		if (!empty($filename)) {		
			$rand = rand();
			$ekstensi =  array('png','jpg','JPG','jpeg');
			$ukuran = $_FILES['upload']['size'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$ekstensi) ) {
				header("location:index.php");
			}else{
				if($ukuran < 1044070){		
					$xx = $rand.'_'.$filename;
					move_uploaded_file($_FILES['upload']['tmp_name'], 'img/'.$rand.'_'.$filename);
					$sql = "UPDATE event SET `name`='$name',`deskripsi`='$deskripsi',`gambar`='$xx',`kategori`='$kategori',`tanggal`='$tgl',`mulai`='$jm',`berakhir`='$jb',`tempat`='$tempat',`harga`='$harga',`benefit`='$for_query' WHERE id = '$id' ";
					if ($conn->query($sql) === TRUE) {
					  header("location:index.php");
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}else{
					header("location:index.php");
				}
			}
		} else {
			$sql = "UPDATE event SET `name`='$name',`deskripsi`='$deskripsi',`kategori`='$kategori',`tanggal`='$tgl',`mulai`='$jm',`berakhir`='$jb',`tempat`='$tempat',`harga`='$harga',`benefit`='$for_query' WHERE id = '$id' ";
			if ($conn->query($sql) === TRUE) {
			  header("location:index.php");
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

	}
?>