<?php require ("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
</head>
<body>
 <header>
 <h3>Calon Mahasiswa yang sudah mendaftar </h3>
 </header>
 <nav>
 <a href = "form_daftar.php"> [+] Tambah Baru</a>
 </nav>
 <br>
 <table border = "1" cellpadding="10" cellspacing="0">
 <thead>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Email</th>
 <th>Jenis Kelamin</th>
 <th>No_Telp</th>
 <th>Password</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $sql = "select * from pendaftar";
 $query = mysqli_query($db, $sql);
 while($mahasiswa = mysqli_fetch_array($query))
 {
 echo "<tr>";
 echo "<td>". $mahasiswa['id']."</td>";
 echo "<td>". $mahasiswa['Nama']."</td>";
 echo "<td>". $mahasiswa['Email']."</td>";
 echo "<td>". $mahasiswa['Jenis_Kelamin']."</td>";
 echo "<td>". $mahasiswa['No_Telp']."</td>";
 echo "<td>". $mahasiswa['Password']."</td>";

 echo "<td>";
 echo "<a href='form_edit.php?id=".$mahasiswa['id']."'>Edit</a> | ";
 echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
 echo"</td>";

 echo "</tr>";
 }
 ?>
 </tbody>
 </table>
 <p> Total:

 <?php echo mysqli_num_rows($query) ?>
</body>
</html>