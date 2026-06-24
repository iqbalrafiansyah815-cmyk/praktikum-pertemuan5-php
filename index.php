<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 - Form Biodata Mahasiswa</title>
</head>
<body>
    <h2>Form Biodata Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NPM:</label><br>
        <input type="text" name="npm"><br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi"><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        <br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        echo "<h3>Hasil Input Biodata</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NPM: " . $npm . "<br>";
        echo "Program Studi: " . $prodi . "<br>";
        echo "Jenis Kelamin: " . $jk . "<br>";
        echo "Alamat: " . $alamat . "<br>";
    }
    ?>
</body>
</html>