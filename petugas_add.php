<?php
require_once 'config.php';
if (isset($_POST['add_petugas'])) {

    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO petugas VALUES ('$id_petugas','$nama','$password')";    
    $result = mysqli_query($db, $query);

    if(!$result){
        die ("query gagal dijalankan: ".mysqli_errno($db).
        "-".mysqli_error($db));
    }
}
//direct ke halaman index.php
header("location: siswa_tampil.php");
?>