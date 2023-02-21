<?php

$a = $_POST["reqema"];
$b = $_POST["reqemb"];
$emeliyyat = $_POST["emeliyyat"];

if($a == "" or $b == ""){
    echo "Xanalari doldurun!";
    // Eger her hansi bir xana bos olarsa, die funksiyasi butun kod oxumani dayandirir;
    die();
}

if($emeliyyat == "toplama"){
    $cavab = $a+$b;
}
if($emeliyyat == "chixma") {
    $cavab = $a-$b;
}
if($emeliyyat == "vurma") {
    $cavab = $a*$b;
}
if($emeliyyat == "bolme") {
    $cavab = $a/$b;
}

echo $cavab;

?>