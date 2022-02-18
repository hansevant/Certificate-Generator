<?php

header('content-type:image/jpg');

$font = "ROADSTORE.ttf";
$image = imagecreatefromjpeg("template.jpg");
$color = imagecolorallocate($image, 168, 15, 41);
$name = "Nama Peserta";

// imagettftext($image, 50, 0, 670, 305, $color, $font, $name);
$coords = imagettfbbox(50, 0, $font, $name);
imagettftext($image, 50, 0, 958 - ($coords[2] / 2), 305, $color, $font, $name);
imagejpeg($image);

// $coords = imagettfbbox(50, 0, $font, $name);
// imagettftext($image, 50, 0, 958 - ($coords[2] / 2), 305, $color, $font, $name);

// $file = time() . '_' . $row['id'];

// imagejpeg($image, "certificate/" . $name . ".jpg");


imagedestroy($image);
