<?php

// PHP -- Arraylar

/*

           Array yaratmagin yollari

$array("Reshad","Qarayev",19,"Baku")
$arr = Array("Reshad","Qarayev",19,"Baku")
$arr = ["Reshad","Qarayev",19,"Baku"]


 Buradaki Array JavaScriptdeki obyekte benzeyir.Key ve value seklinde yaradirig

 $array = array(

    "soyad"=> "Qarayev",
     "ad"=> "Reshad",
     "yas"=> 19,
     "seher"=> "Baku",

 );

 echo $array["soyad"] -- Qarayev

 Arraya yeni bir melumat elave etmek istesek

 $array["universite"] = "Khazar";

 echo $array["universite"] --- Khazar


 Array icinde array yaradirig. Bir nov multidimensiol array yaranir
 $array = array(
     array("Reshad","Qarayev",19,"Baku")
 );

 echo $array[0][0] -- Reshad


 $array = array("Reshad","Qarayev",19,"Baku");

 print_r($array) -- Array ( [0] => Reshad [1] => Qarayev [2] => 19 [3] => Baku )


*/

// PHP - Array Methodları


/*
   $ar = array("Reshad","Qarayev","Baku");

   1. implode() - Bu methodda birinci arqument arrayi, 2 ci ise arrayin deyerlerini hansi simvolla birlestirmek istediyini deyirsen
   $yeni_ar = implode($ar, " , ")

   echo $yeni_ar; -- Reshad,Qarayev,Baku

   2.array_shift() -- Arrayin ilk deyerini silir

   array_shift($ar);

   print_r($ar) - Qarayev Baku

   3.array_unshift() -- Arraya ilk hissesine deyer elave edir

   array_unshift($ar,19);

   print_r($ar) - 19 Reshad Qarayev Baku 
   
   4.pop() -- Arrayin sonuncu elementini silir

   array_pop($ar) ;

   print_r($ar) - Reshad Qarayev

   4.push() -- Arrayin sonuna element elave edir

   array_push($ar, "Neymar") ;

   print_r($ar) - Reshad Qarayev Baku Neymar


    $array = array(

     "soyad"=> "Qarayev",
     "ad"=> "Reshad",
     "yas"=> 19,
     "seher"=> "Baku",

 );

   5.extract() -- Arrayin elementleri onlarin key adlari ile variable yaradir

   extract($ar) ;
   
   Burada artiq biz echodan istifade ede bilirik

   echo $soyad -- Qarayev
   echo $ad -- Reshad

   6.count() -- Arrayin uzunlugunu olcur

   $arr = array("Reshad", "Qarayev")

   $say = count($ar);

   echo $say -- 2

   7.array_count_values -- Arraydaki elementlerin nece defe tekrarlandigini gosterir

   $ar = ["Reshad","Nicat","Yunis", "Turan","Reshad","Nicat",
   "Reshad","Nicat","Yunis"]

   $new_ar = array_count_values($ar);

   print_r($new_ar) -- Reshad -> 3 , Nicat -> 3, Yunis -> 2, Turan -> 1;


*/

?>