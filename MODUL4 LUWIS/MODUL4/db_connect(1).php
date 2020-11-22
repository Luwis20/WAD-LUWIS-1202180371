<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($nama,$email,$nohp,$pass)
	{	
		$cekemail = mysqli_query($this->koneksi, "select * from user where email like '%".$email."%' ");
		$hasilcekemail = mysqli_num_rows($cekemail);
		if ($hasilcekemail > 0) {
			// echo "Email sudah terdaftar";
			return "emasail sudah terdaftar";
		}elseif ($hasilcekemail == 0) {
			$insert = mysqli_query($this->koneksi,"insert into user values ('','$nama','$email','$nohp', '$pass')");
			return $insert;
		}
	}

	function login($email,$password,$remember)
	{	
		$query = mysqli_query($this->koneksi,"select * from user where email='$email'") or die(mysqli_error());
		$data_user = $query->fetch_array();
		$passhash = password_hash($password, PASSWORD_DEFAULT);
		if(password_verify($data_user['password'], $passhash))
		{
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('password', $password, time() + (60 * 60 * 24 * 5), '/');
				setcookie('remember', 'benar', time() + (60 * 60 * 24 * 5), '/');
				setcookie('warna', 'black', time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['iduser'] = $data_user['id'];
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['nohp'] = $data_user['no_hp'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function addCart($nama_barang, $harga, $id_user)
	{
		$add = mysqli_query($this->koneksi, "insert into cart values ('', '$id_user', '$nama_barang', '$harga')") or die(mysqli_error());
	}

	function hitungCart($id_user)
	{
		$query = mysqli_query($this->koneksi, "select * from cart where user_id = '$id_user'");
		$hitung = mysqli_num_rows($query);
		return $hitung;
	}
	// function relogin($username)
	// {
	// 	$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
	// 	$data_user = $query->fetch_array();
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['nama'] = $data_user['nama'];
	// 	$_SESSION['is_login'] = TRUE;
	// }
} 


?>