<?php
include 'config.php';
if (isset($_POST['update'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    $updatesiswa = mysqli_query($db, "UPDATE siswa SET nama='$nama', alamat='$alamat', no_hp='$no_hp', password = '$password' WHERE nisn='$nisn'");
    if ($updatesiswa) {
        echo "<script>alert('data berhasil diupdate.');window.location='siswa_tampil.php';</script>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

//logika ambil data (dijalankan saat halaman pertama kali di muat)
$nisn = $_GET['nisn']; //ambil nisn dari query string
$query = mysqli_query($db, "SELECT * FROM siswa WHERE nisn='$nisn'");
$data = mysqli_fetch_assoc($query); //ambil data dari hasil query  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css?v=1.0.0">
    <title>Update</title>
</head>

<body>
    <nav>
        <a class="heading" href="#">Elektronik Pustaka</a>
    </nav>
    <a class="heading" href="#">Update Data Siswa</a>
    <div class="container col-md-4 mt-5">
        <div class="input-area">
            <form action="" method="POST"> <!--action dikosongkan, artinya submit ke halaman ini sendiri-->
                <input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" readonly /><br>
                <label>nama:</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required /><br>
                <label>alamat:</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required /><br>
                <label>no_hp:</label>
                <input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" required /><br>
                <label>password:</label>
                <input type="password" name="password" value="<?php echo $data['password']; ?>" required /><br>
                <button class="btn" type="submit" name="update">Update</button>
                <a href="siswa_tampil.php">kembali</a>
            </form>
        </div>
</body>

</html>