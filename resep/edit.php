<?php
// UJIAN PWEB NAUVAL HAFIDZ ATHAULLAH S 51421624 3IA05
// masukan file koneksi database
include("connect.php");
// mengecek apakah form dikirimkan untuk update resep, lalu arahkan ke index setelah berhasil di update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
	$nmpmbt = $_POST['nmpmbt'];
    $nmrsp = $_POST['nmrsp'];
    $bahan = $_POST['bahan'];
    $cara = $_POST['cara'];
	// update data resep
    $hasil = mysqli_query($connection, "UPDATE resep SET nmpmbt='$nmpmbt', nmrsp='$nmrsp', bahan='$bahan', cara='$cara' WHERE id=$id");
    // lakukan redirect ke index untuk melihat hasil dari update data
    header("Location: index.php");
}
?>
<?php
// GET id dari url
$id = $_GET['id'];
// Fetch resep data berdasarkan id
$hasil = mysqli_query($connection, "SELECT * FROM
 resep WHERE id=$id");
while($data = mysqli_fetch_array($hasil))
 {
     $nmpmbt = $data['nmpmbt'];
     $nmrsp = $data['nmrsp'];
     $bahan = $data['bahan'];
     $cara = $data['cara'];
 }
?>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <h2>
            Edit Data Resep
        </h2>
        <form method="post" action="edit.php" name="formupload">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nama :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nmpmbt" value="<?php echo $nmpmbt; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Resep :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nmrsp" value="<?php echo $nmrsp; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Bahan :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="bahan" value="<?php echo $bahan; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Cara :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="cara" value="<?php echo $cara; ?>">
            </div>
            <div>
                <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Edit">
                <a href='index.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </body>
</html>