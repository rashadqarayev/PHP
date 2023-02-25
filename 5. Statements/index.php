<?php 

// PHP -- If, Else funksiyalari

// $a = 7;
// if($a > 5){
//     echo "Emeliyyat ugurludur";
// }else{
//     echo "Emeliyyat ugursuzdur!";
// }

// && - and -- ve demekdir
// or - ve ya demekdir

// PHP - Switch and case

if(isset($_GET["sehife"])){
$sehife = $_GET["sehife"];
}else{
    $sehife = '';
}


switch($sehife){
    case "haqqinda":

    echo "Bu bolme haqqinda bolmesidir";

    break;

    case "elaqe":

    echo "Bu bolme elaqe bolmesidir";

    break;
    
    case "gallery":

    echo "Bu bolme Galery bolmesidir";

    break;

    default:
    
    echo "<h1>Ana Sehife</h1> <br/>";
    
    echo '<a href="index.php?sehife=haqqinda">Haqqinda</a> | 
    <a href="index.php?sehife=elaqe">Elaqe</a> |
    <a href="index.php?sehife=gallery">Gallery</a> |
    '
;
}


?>