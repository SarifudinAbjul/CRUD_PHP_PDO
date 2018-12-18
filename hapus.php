<?php

include ('koneksi.php');

$statement=$dbConn->prepare("DELETE FROM pegawai WHERE id=" . $_GET['id']);
$statement->execute();
header('location:index.php');

?>