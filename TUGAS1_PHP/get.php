<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method get</title>
</head>
<body>
    <form method="get">

        <label>Nama Lengkap</label><br>
        <input type="text" name="fullname"><br>

        <label>Nama Sekolah</label><br>
        <textarea name="sekolah"></textarea><br>

        <input type="submit" name="tekan" value="send" >

    </form>


    <?php
    if(isset($_GET['tekan'])){
        $fullname = $_GET["fullname"];
        $sekolah = $_GET["sekolah"];
        $tombol = $_GET["tekan"];

        echo "Nama: $fullname <br>sekolah $sekolah ";

    }
    ?>
</body>
</html>