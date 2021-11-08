<?php
// phpinfo();
// echo $_SERVER['REQUEST_URI'];exit;

// (A) OPEN IMAGE
$img = imagecreatefromjpeg("sample.jpeg");

// (B) WRITE TEXT
$txt = "Hello World";
// $fontFile = "C:\Windows\Fonts\arial.ttf"; // CHANGE TO YOUR OWN!
$font = "Arial.ttf";
$fontSize = 32;
$fontColor = imagecolorallocate($img, 128, 128, 128);
$posX = 5;
$posY = 44;
$angle = 0;
imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $font, $txt);

// (C) OUTPUT IMAGE
// (C1) DIRECTLY SHOW IMAGE
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

// (C2) OR SAVE TO A FILE
// $quality = 100; // 0 to 100
// imagejpeg($img, "demo.jpg", $quality);
