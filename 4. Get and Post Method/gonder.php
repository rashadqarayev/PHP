<?php 

// PHP -- GET ve POST Methodu

/*
  GET methodu
Bu method zamani action.php ye daxil olunur, yuxaridaki URL den melumatlar cekilir. Biz hemin melumatlari saytdan urli deyismekle de deyise bilirik. BU tehlukelidir

Burada method funksiyasi icinde yazilan sozler ise inputlarin namesidir

$goster_ad = $_GET["adim"];
$goster_soyad = $_GET["soyadim"];
$goster_sheher = $_GET["sheherim"];

echo "Sizin adiniz:  $goster_ad <br/>
Sizin soyadiniz: $goster_soyad <br/>
Sizin sheheriniz: $goster_sheher
"


  POST methodu
Bu method zamani action.php ye yalniz 1 defe daxil olunur ve biz oradan melumatlari deyise bilmirik.

Burada method funksiyasi icinde yazilan sozler ise inputlarin namesidir

$goster_ad = $_POST["adim"];
$goster_soyad = $_POST["soyadim"];
$goster_sheher = $_POST["sheherim"];

echo "Sizin adiniz:  $goster_ad <br/>
Sizin soyadiniz: $goster_soyad <br/>
Sizin sheheriniz: $goster_sheher
"

*/

$goster_ad = $_POST["adim"];
$goster_soyad = $_POST["soyadim"];
$goster_sheher = $_POST["sheherim"];

if($goster_ad == "Reshad" or $goster_ad == "reshad"){
  echo "Siz Adminsiniz!";
}else{
  echo  "Siz Admin deyilsiniz!";
}

?>