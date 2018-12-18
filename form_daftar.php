<?php

include_once('koneksi.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> FORM REGISTRASI</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
	<div class="form">
		<h3>HALAMAN INSERT DATA</h3>
		<form action="insert_daftar.php" method="post" enctype="multipart/form-data">
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" autocomplete="off" id="nama" required>
			</li>
			<li>
				<label for="alamat">Alamat</label>
				<textarea id="alamat" name="alamat" autocomplete="off" required  style="margin-top: 10px;"></textarea>
<!-- 				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" autocomplete="off" id="alamat" required> -->
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" autocomplete="off" id="email" required>
			</li>
			<li>
				<label for="no_hp">No.hp</label>
				<input type="number" name="no_hp" autocomplete="off" id="no_hp" required>
			</li>
			<button type="submit" name="Submit">Daftar</button>
		</form>
	</div>
</div>


</body>
</html>