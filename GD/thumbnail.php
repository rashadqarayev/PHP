<?php

$img  = imagecreatefromjpeg("./download.jpg");

$thumbnail = imagescale($img,800);
imagejpeg($thumbnail,"turan.png");

$imgthumbnail = imagecreatefromjpeg("./turan.png");
header(
'Content-type: image/jpeg'
);
imagejpeg($imgthumbnail)


?>