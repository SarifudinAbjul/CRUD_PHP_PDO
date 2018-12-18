<?php

include ('koneksi.php');

$results=$dbConn->query("SELECT * FROM pegawai ORDER BY id DESC ");
// $query=mysqli_query($conn, "SELECT * FROM pegawai");
// $results=mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<html>
<head>
	<title>daftar_pegawai</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="daftar">
<div class="container jumbotron">
	<h3>DAFTAR PEGAWAI</h3>
		<a href="form_daftar.php" style="color:#932114;">[+]Tambah Data</a>
	<table border="1" cellpadding="10" cellspacing="0" class="table" style="margin-top: 10px">
		<thead>
		  <tr class="row">
		  	<th>NO</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>NO.HP</th>
			<th>AKSI</th>
		  </tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
		<?php while($row=$results->fetch(PDO::FETCH_ASSOC)): ?>
			<tr class="row">
				<td><?= $no++;?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['alamat']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['no_hp']; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah anda ingin mengubah data ini?');">ubah</a> |

					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda Yakin ingin Menghapus data ini?');">hapus</a>
				</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
</div>


</body>
</html>