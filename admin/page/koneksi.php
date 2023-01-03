<?php
$host = "41.216.186.97";
$user = "levin";
$pass = "Dytazekken121";
$db = "pppllevindb";
$connect = mysqli_connect($host, $user, $pass, $db); // Koneksi ke MySQL
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}