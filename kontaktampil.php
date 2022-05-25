<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h2> List Kontak </h2>
<table border="1">
<tr><th>NO</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
<?php
include 'koneksi.php';
$pengguna=mysqli_query($koneksi, "SELECT * FROM kontak");
$no=1;
foreach ($pengguna as $row) {
	echo "<tr>
	<td>$no</td>
	<td>".$row['Nama']."</td>
	<td>".$row['jkel']."</td>
	<td>".$row['Email']."</td>
	<td>".$row['Alamat']."</td>
	<td>".$row['Kota']."</td>
	<td>".$row['Pesan']."</td>
	</tr>";
	$no++;
}
?>
</table>
</body>
</html>
