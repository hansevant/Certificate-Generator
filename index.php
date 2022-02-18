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

        $download =  '<a href="file/ . $name . .jpg download>Download!</a>';
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generator</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,300&family=Shizuru&display=swap');

            * {
                font-family: sans-serif;
                margin: 0;
                padding: 0;
            }

            body {
                background-size: cover;
                background: radial-gradient(circle, rgba(181, 110, 101, 1) 0%, rgba(248, 225, 176, 1) 100%);

            }

            h2 {
                padding: 5px 0px;
                font-family: 'Kanit', sans-serif;
                font-size: 50px;
                /* font-weight: 600; */
            }

            img {
                margin: 20px 10px 0 10px;
                /* margin-top: 20px; */
                max-width: 100%;
                height: auto;
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            }

            input {
                text-align: center;
                margin: 15px 5px;
                height: 30px;
                font-size: 16px;
                width: 222px;
            }

            .d {
                display: inline;
                text-decoration: none;
                background-color: black;
                color: whitesmoke;
                font-weight: bold;
                border-radius: 5px;
                padding: 10px;
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            }

            button {
                text-align: center;
                width: 90px;
                height: 33px;
                font-size: 16px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <center>
            <h2>Generate Certificate</h2>
            <img src="file/<?php echo $name; ?>.jpg" alt="" width="750">
            <form action="" method="post">
                <input type="text" name="name" placeholder="namanya siapa..">
                <a href="file/<?php echo $name ?>.jpg" download><button type="submit">Cetak</button></a>
                <br><br><a class="d" href="file/<?php echo $name ?>.jpg" download>DOWNLOAD</a>
            </form>
            <br>
            <br>
        </center>
    </body>

    </html>
