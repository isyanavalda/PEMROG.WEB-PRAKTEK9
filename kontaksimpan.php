<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel 
$nama=$_POST['nama'];
$jenkel=$_POST['jenis_kelamin'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];
// query SQL untuk memasukkan data
$query="INSERT INTO kontak SET Nama='$nama', jkel='$jenkel', Email='$email', Alamat='$alamat', Kota='$kota', Pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:kontaktampil.php");
?>
