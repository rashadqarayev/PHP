<?php

// PHP - Deyisken funksiyalari

/*
    1) gettype() -- tipi gosterir
    
    $a = 52331;
    echo gettype($a) --  integer
    
    2) settype() -- varibleye tipini deyisdirik.Ilk parametr deyiseceyimiz element, ikinci parametr ise hansi tipe deyismek isteyirik onu yazirig
    
    $a = "592";
    echo gettype($a). "<br/>"; -- integer

    settype($a, "integer")

    echo gettype($a)  --- integer

    3) isset() -- deyiskenin var oldugunu yoxlayir 
    
    $a = 12213;
    echo isset($a) -- 1 qaytarir(1 - truedir)
    echo var_dump(isset($a)) -- bool(true)

    4) unset() -- deyiskeni silir
    
    $salam = "HELLO"
    echo $salam -- hello

    unset ($salam);
    echo $salam -- undefined variable
*/
?>