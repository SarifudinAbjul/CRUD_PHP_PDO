<?php

// including the database connection file
include_once("koneksi.php");

if(isset($_POST['update']))
{    
    $id = $_POST['id'];   
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
     $no_hp=$_POST['no_hp'];    
    
    // checking empty fields
if(empty($nama) || empty($alamat) || empty($email) || empty($no_hp)) {    
      
    if(empty($nama)) {
            echo "<font color='red'>Masukkan nama Dulu!!!,</font><br/>";
    }
        
    if(empty($alamat)) {
            echo "<font color='red'>Masukkan Alamat Dulu!!!</font><br/>";
    }
        
    if(empty($email)) {
            echo "<font color='red'>Masukkan Email Dulu!!!</font><br/>";
    } 
    if(empty($no_hp)) {
        echo "<font color='red'>Masukkan NO.Hp Dulu!!!</font><br/>";
    }       
} else {    
        //updating the table
$sql = "UPDATE pegawai SET nama=:nama, alamat=:alamat, email=:email, no_hp=:no_hp WHERE id=:id";
    $query = $dbConn->prepare($sql);
                
    $query->bindparam(':id', $id);
    $query->bindparam(':nama', $nama);
    $query->bindparam(':alamat', $alamat);
    $query->bindparam(':email', $email);
    $query->bindparam(':no_hp', $no_hp);
    $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
                
        //redirectig to the display page. In our case, it is index.php
    header("Location: index.php");
    }
}

//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM pegawai WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nama = $row['nama'];
    $alamat = $row['alamat'];
    $email = $row['email'];
    $no_hp = $row['no_hp'];

}
?>
<html>
<head>    
    <title>Edit Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
 
<body style="text-align: center; margin-top:100px;">

    <form name="update" method="post" action="" style="list-style: none;" >
    	    <a href="index.php" style="margin-bottom: 10px; text-decoration: none; border: 2px solid black; border-radius: 5px; padding: 5px;">Home</a>
        <table border="0">
            <li>
				<label for="nama" style="margin-right: 10px;">Nama:</label>
                <input id="nama" type="text" name="nama" value="<?= $nama;?>" style="margin-top: 10px;">
           </li>
            <li>
				<label for="alamat">Alamat</label>
				<textarea id="alamat" name="alamat" autocomplete="off" required  style="margin-top: 10px;"><?= $alamat;?></textarea>
            </li>
           <li>
                <label for="email" style="margin-right: 10px;" >Email:</label>
                <input id="email" type="email" name="email" value="<?= $email;?>" style="margin-top: 10px;">
            </li> 
            <li>
               <label for="no_hp" style="margin-right: 5px;" >No.Hp:</label>
                <input id="no_hp" type="number" name="no_hp" value="<?= $no_hp;?>" style="margin-top: 10px;">
            </li>
            <li>
                <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                <input type="submit" name="update" value="Update" style="margin-top: 10px;">
           </li>
        </table>
    </form>
</body>
</html>