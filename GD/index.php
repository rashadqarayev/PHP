<?php
// Load the image

$image =  imagecreatefromjpeg('./download.jpg');

// Font and size
$font  = "./roboto.ttf";
$fontSize = 10;

// Text color
$textColor = imagecolorallocate($image ,130, 255,200);

// Text
$text = "meni yorma reshaad";

// Cordinates for the text
$x = 150 ;
$y = 180;
// Adding text to the image
imagettftext($image,$fontSize,15,$x,$y,$textColor,$font,$text);

// Output the image

header('Content-Type: image/jpeg');
imagepng($image);




?>
