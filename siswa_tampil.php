<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.pus</title>
</head>

<body>
    <nav>
        <a class="heading" href="#">Elektronik Puskata</a>
    </nav>
    <a class="heading" href="#">Data_Siswa</a>
    <div class="container">
        <div class="input-area">
            <form method="POST" action="siswa_add.php">
                <input type="text" name="nisn" placeholder="masukkan nisn" required /><br>
                <input type="text" name="nama" placeholder="masukkan nama" required /><br>
                <input type="text" name="alamat" placeholder="masukkan alamat" required /><br>
                <input type="text" name="no_telp" placeholder="masukkan no_telp" required /><br>
                <input type="password" name="password" placeholder="masukkan password" required /><br>
                <button class="btn" name="add_siswa">Tambah</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No_Telp</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
            <thead
                <tbody>
                <?php
                include "config.php";
                $fetchingsiswa = mysqli_query($db, "SELECT * FROM siswa ORDER BY nisn ASC")
                    or die("Query gagal: " . mysqli_error($db));
                $count = 1;
                while ($fetch = $fetchingsiswa->fetch_array()) {
                ?>
                    <tr class="border-bottom">
                        <td><?php echo $count++ ?></td>
                        <td><?php echo $fetch['nisn']; ?></td>
                        <td><?php echo $fetch['nama']; ?></td>
                        <td><?php echo $fetch['alamat']; ?></td>
                        <td><?php echo $fetch['no_telp']; ?></td>
                        <td><?php echo $fetch['password']; ?></td>
                        <td colspan="2" class="action">
                            <a href='siswa_update.php?nisn="<?php echo $fetch['nisn'] ?> "'>Edit</a>
                            <a href='siswa_delete.php?nisn="<?php echo  $fetch['nisn'] ?> "'></a>Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
    </table>
    </div>
</body>
</html>