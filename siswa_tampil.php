<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0.0">
</head>

<body>

    <nav>
        <a class="heading" href="#">Elektronik Pustaka</a>
    </nav>

    <a class="heading" href="#">Data Siswa</a>

    <div class="container">
        <div class="input-area">
            <form method="POST" action="siswa_add.php" >
                <input type="text" name="nisn" placeholder="Masukkan NISN" required/><br>
                <input type="text" name="nama" placeholder="Masukkan Nama" required/><br>
                <input type="text" name="alamat" placeholder="Masukkan Alamat" required/><br>
                <input type="text" name="no_hp" placeholder="Masukkan No HP"  required/><br>
                <input type="password" name="password" placeholder="Masukkan Password" required/><br>
                <button class="btn" name="add_siswa">Tambah</button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include "config.php";

            $query = mysqli_query($db, "SELECT * FROM siswa ORDER BY nisn ASC")
                or die(mysqli_error($db));

            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nisn'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td class="action">
                        <a href="siswa_update.php?nisn=<?= $row['nisn'] ?>">Edit</a>
                        <a href="siswa_delete.php?nisn=<?= $row['nisn'] ?>"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>