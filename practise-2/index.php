<?php

switch(@$_GET["sehife"]){
    case "hesabla":

        $a = trim($_POST["reqema"]);
    $b = trim($_POST["reqemb"]);
    $emeliyyat = $_POST["emeliyyat"];


    // empty() - Bu funksiya xanalarin bos oldugunu yoxlayir
    if(empty($a) or empty($b)){
        echo "xanalari doldurun!";
        die();
    }

    // is_numeric() - Daxil olunan simvolun reqem oldugunu yoxlayir.Reqemdirse true gonderir 

    if(!is_numeric($a) or !is_numeric($b)){
        echo "Sadece reqem daxil edile biler!";
        die();
    }

    if($emeliyyat == 1){$cavab = $a + $b;}
    if($emeliyyat == 2){$cavab = $a - $b;}
    if($emeliyyat == 3){$cavab = $a * $b;}
    if($emeliyyat == 4){$cavab = $a / $b;}


    echo "Cavab : $cavab<br/>";

        break;

        default:


        echo '
<form action="index.php?sehife=hesabla" method="post">
Reqem A: <br/>
<input type="text" name="reqema"><br/>
Reqem B: <br/>
<input type="text" name="reqemb"><br/>
<select name="emeliyyat">
    <option value="1">Toplama</option>
    <option value="2">Chixma</option>
    <option value="3">Vurma</option>
    <option value="4">Bolme</option>
</select><br/> <br/>
<input type="submit" value="Hesabla"><br/>
</form>';


        break;
}

    


?>