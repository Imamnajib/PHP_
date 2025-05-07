<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Ujian</title>
</head>
<body>

    <h2>Form Input Nilai</h2>

    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai"><br><br>

        <input type="submit" name="kirim" value="Kirim">
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Nilai: $nilai<br>";

        if ($nilai >= 70) {
            echo "Keterangan: Lulus";
        } else {
            echo "Keterangan: Remedial";
        }
    }
    ?>

</body>
</html>
