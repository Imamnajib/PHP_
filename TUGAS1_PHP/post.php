<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method post</title>
</head>
<body>

    <form Method="post">

    <label>username</label><br>
    <input name ="username" type="text"><br>

    <label>password</label><br>
    <input  type="password" name ="password" ><br>

    <input type="submit" name="tekan" value="send">

    </form>
<?php

    if(isset($_POST['proses'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $tombol = $_POST['tekan'];

        echo "username $username <br> password $password <br>";


    }

?>


    
</body>
</html>