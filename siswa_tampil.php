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
               <input type="text" name="nisn" placeholder="masukkan nisn" required><br>
               <input type="text" name="nama" placeholder="masukkan nama"required><br>
               <input type="text" name="alamat" placeholder="masukkan alamat"required><br>
               <input type="text" name="no_telp" placeholder="masukkan no_telp"required><br>
               <input type="password" name="password" placeholder="masukkan password"required><br>    
                <button class="btn" name="add_siswa">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>