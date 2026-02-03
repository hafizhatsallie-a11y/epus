<?php
require_once 'config.php';

if ($_GET['nisn']) {
    $nisn = $_GET['nisn'];

    $deletingsiswa = mysqli_query($db, "DELETE FROM siswa WHERE nisn =$nisn")
        or die(mysqli_error($db));

    header("location: siswa_tampil.php");
}
?>