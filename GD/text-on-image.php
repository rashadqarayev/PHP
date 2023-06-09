<?php
// Load the image
$image = imagecreatefromjpeg('./image.png');

// Font and size
$font  = "./Roboto.ttf";
$fontSize = 20;

// Text color
$textColor = imagecolorallocate($image, 123, 123, 91);

// Text
$text = "Hello World";

// Cordinates for the text
$x = 120;
$y = 190;    

// Adding text to the image
imagettftext($image,$fontSize,35,$x,$y,$textColor,$font,$text);

// Output the image
header('Content-type: image/png');
imagepng($image);






?>
