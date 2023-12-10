<?php
// UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
// buat koneksi database dengan connect file
include("connect.php");
// fetch semua data resep dari database
$hasil = mysqli_query($connection, "SELECT * FROM resep ORDER by id DESC");
?>
<html>
    <head>
        <title>Data-Data Koleksi Resep Makanan</title>
    </head>
    <body>
        <div style="
        margin-top: 10px;
        margin-bottom: 10px;
        border: 2px solid black;
        width: 30%;
        text-align: center;
        color: black;
        padding: 5px;
        float: right;">
            <a href="tambahdata.php" style="text-decoration: none; color: black;">
                Tambah Data Resep Makanan
            </a>
        </div>
        <table style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Resep</th>
                    <th>Bahan</th>
                    <th>Cara</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($resep = mysqli_fetch_array($hasil))
                {
                    echo "<tr>";
                    echo "<td>".$resep['nmpmbt']."</td>";
                    echo "<td>".$resep['nmrsp']."</td>";
                    echo "<td>".$resep['bahan']."</td>";
                    echo "<td>".$resep['cara']."</td>";
                    echo "<td>
                    <a href='edit.php?id=$resep[id]'>Edit</a> | <a href='delete.php?id=$resep[id]'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>