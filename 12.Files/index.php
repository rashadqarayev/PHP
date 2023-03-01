<?php

// PHP - Fayl cagrilmasi

/*

    1.include() -- fayli cagirir. Diger faylda yaratdigimiz variableni getirib burdada istifade ede bilirik.

    include "chagir.php";

    echo $a;


    2.include_once() -- fayli cagirir. Amma includeden fergli olaraq fayli yalniz 1 defe cagirir.


    3.require() -- fayli cagirir. Diger faylda yaratdigimiz variableni getirib burdada istifade ede bilirik.

    require "chagir.php";

    echo $a;


    4.require_once() -- fayli cagirir. Amma includeden fergli olaraq fayli yalniz 1 defe cagirir.


*/

// w - fayli yaradir

$file  = fopen("file.txt" ,"w");

// Fayla yazini yazir.

fwrite($file,"Salam bu bir metndir!");

if($file){
    echo "Ugurlu";
}




?>