<?php

$dbhost = "localhost";
$dbuser = "username";
$dbpass = "password";
$dbname = "data_penjualan";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
