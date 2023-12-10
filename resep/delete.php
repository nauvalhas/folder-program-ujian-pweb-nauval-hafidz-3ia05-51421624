<?php
// UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
// masukan file database koneksi
include("connect.php");
// Ambil id dari url untuk mendelet data resep
$id = $_GET['id'];
// Delete baris resep dari table berdasarkan id
$hasil = mysqli_query($connection, "DELETE FROM resep WHERE id=$id");
// Setelah menghapus redirect kembali ke index untuk melihat hasilnya
header("Location:index.php");
?>