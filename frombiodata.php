<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>

    <h2>Form Biodata</h2>

    <form method="POST">
        Nama:
        <input type="text" name="nama">
        <br><br>

        Umur:
        <input type="number" name="umur">
        <br><br>

        Alamat:
        <input type="text" name="alamat">
        <br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $nama = trim($_POST['nama']);
        $umur = trim($_POST['umur']);
        $alamat = trim($_POST['alamat']);

        
        if (empty($nama) || empty($umur) || empty($alamat)) {

            echo "<script>alert('Semua data harus diisi!');</script>";

        } else {

            
            $nama = htmlspecialchars($nama);
            $umur = htmlspecialchars($umur);
            $alamat = htmlspecialchars($alamat);

            
            echo "<h3>Hasil:</h3>";
            echo "Nama: $nama <br>";
            echo "Umur: $umur <br>";
            echo "Alamat: $alamat <br>";
        }
    }
    ?>

</body>
</html>