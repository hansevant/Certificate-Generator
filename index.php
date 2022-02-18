<?php
error_reporting(0);
if (isset($_POST['name'])) {

    // header('content-type:image/jpg');

    $font = "ROADSTORE.ttf";
    $image = imagecreatefromjpeg("template.jpg");
    $textColour = imagecolorallocate($image, 168, 15, 41);
    $name = $_POST['name'];

    // imagettftext($image, 50, 0, 670, 305, $color, $font, $name);
    // imagejpeg($image);

    $coords = imagettfbbox(50, 0, $font, $name);
    imagettftext($image, 50, 0, 958 - ($coords[2] / 2), 305, $textColour, $font, $name);

    // $file = time() . '_' . $row['id'];

    imagejpeg($image, "file/" . $name . ".jpg");

    imagedestroy($image);

    $download =  "<a href=file/" . $name . ".jpg download>Download!</a>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Shizuru&display=swap');

        * {
            font-family: sans-serif;
        }

        h2 {
            font-family: 'Shizuru', cursive;
            font-size: 30px;
        }

        form {
            margin: auto auto;
            width: 200px;
            height: 200px;
            /* background-color: wheat; */
        }

        input {
            text-align: center;
            margin: 20px;

        }

        button {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h2>Cetak Sertifikat</h2>
        <a href="cert.php" target="_blank">
            <button>Contoh</button>
        </a>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nama Lengkap"> <br>
            <button type="submit">Cetak</button>
        </form>
        <?= $download; ?>
        <br>
        <?= "*masih ada bug nama yang diinput gaboleh pake spasi biar bisa didownload" ?>
    </center>
</body>

</html>