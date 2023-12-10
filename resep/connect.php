<?php
// UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
/**
 * file connect ini berisi tentang pengaturan database untuk dapat melakukan koneksi
 */
$host = "localhost";
$user = "root";
$password = "";
$database = "simple_crud";
$connection = mysqli_connect($host,$user,$password,$database);
/**
 * fungsi dibawah berguna untuk mengecek kesalahan pada koneksi
 */
if($connection->connect_error)
{
    die("Koneksi Gagal");
}
?>