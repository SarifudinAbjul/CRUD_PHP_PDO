<?php

include_once('koneksi.php');

if (isset($_POST["Submit"]) ) {
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$no_hp=$_POST['no_hp'];

$sql = "INSERT INTO pegawai(nama, alamat, email, no_hp)VALUES(:nama, :alamat, :email, :no_hp)";
	//mengirim Query secara terpisah dengan query utama

	$query=$dbConn->prepare($sql);

	$query->bindparam(":nama",$nama);
	$query->bindparam(":alamat",$alamat);
	$query->bindparam(":email",$email);
	$query->bindparam(":no_hp",$no_hp);
	$query->execute();


}

if($query) {
	// echo "string";
	header("Location: index.php");
}else{
	echo "gagal";
}


?>

