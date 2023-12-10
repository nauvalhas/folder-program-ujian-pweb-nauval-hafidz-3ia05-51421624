<html>
    <head>
        <title>Tambahkan Data Resep Barur</title>
    </head>
<body>
        <h2>
            Tambah Daftar Resep Makanan
        </h2>
        <form action="tambahdata.php" method="post" name="form1">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nama :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nmpmbt">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Resep :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nmrsp">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Bahan :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="bahan">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Cara :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="cara">
            </div>
            <div>
                <input type="submit" name="Submit" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Tambahkan">
                <a href='index.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
        <?php
		// UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
        // mengecek apakah form sudah tersubmit, insert data dari tabel resep
        if(isset($_POST['Submit']))
        {
            $nmpmbt= $_POST['nmpmbt'];
            $nmrsp = $_POST['nmrsp'];
            $bahan = $_POST['bahan'];
            $cara = $_POST['cara'];
			// Masukan file koneksi database
            include("connect.php");
			// insert data ke tabel resep
            $hasil = mysqli_query($connection, "INSERT INTO resep (nmpmbt,nmrsp,bahan,cara) VALUES('$nmpmbt', '$nmrsp', '$bahan', '$cara') ");
			// menampilkan pesan ketika berhasil di tambahkan
            echo "Data resep Berhasil DiTambahkan. <a href='index.php'>Data Resep</a>";
        }
        ?>
    </body>
</html>