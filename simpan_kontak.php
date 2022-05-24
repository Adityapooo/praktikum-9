<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "mydb";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $vnama=$_POST['nama'];
    $vjkel=$_POST['jnskmn'];
    $vemail=$_POST['email'];
    $valamat=$_POST['alamat'];
    $vkota=$_POST['kota'];
    $vpesan=$_POST['pesan'];

    $sql="insert kontak set nama='$vnama',
    jnskmn='$vjkel',
    email='$vemail',
    alamat='$valamat',
    kota='$vkota',
    pesan='$vpesan'";
    
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:kontak.html");
?>