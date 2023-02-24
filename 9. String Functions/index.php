<?php

// PHP - String Funksiyalari

/*

  $yazi = "Menim adim Reshaddir";

  1. substr($yazi,6) -- "adim Reshaddir"
  Baslangicdan etibaren 6 simvol silinir

  2. substr($yazi,0,10) -- "Menim adim"
  0-10 simvollari arasini oxuyur

  3. substr($yazi,-9) -- "Reshaddir"
  Sondan etibaren 9 simvolu gosterir

  4. strlen($yazi) -- 20
  Stringin uzunlugunu olcur

  5. strtoupper($yazi) -- MENIM ADIM RESHADDIR
  Butun herfleri boyukle yazir

  6.strtolower($yazi) -- menim adim reshaddir
  Butun herfleri kicikle yazir

  7.ucfirst($yazi) - Menim adim Reshaddir
  Cumlenin ilk herfi boyukle yazilir

  8.ucwords($yazi) - Menim Adim Reshaddir
  Cumledeki sozlerin ilk herfini boyukle yazir

  9.trim()
  Bosluqlari silir

  $yazi= "<b>Reshad</b>";

  10.htmlspecialchars($yazi) - <b>Reshad</b>
  Bize ekranda html taglarini gosterir

  $yazi= "Reshad
  Necesen?
  Nevar ne yox?";

  11.nl2br($yazi) - Enter demekdir. Sozleri normal setirde alt alta yazdirir

  12. str_replace- Bu funksiyada ilk parametr hansi sozu evez etmek isteyirik, 2 ci parametr o sozu ne ile evez etmek isteyirik , 3 cu parametr ise hansi deyiskeni deyisirik onu qeyd edirik

  $yazi = "Salam menim adim Reshaddir";

  $yazi = str_replace("Reshad", "Nicat", $yazi);

  echo $yazi -- Salam menim adim Nicatdir

  13. explode() - stringi her hansi bir simvola gore muxtelif arraylara ayirir

  $data = "Admin@12345@salam@nicat";

  $data = explode("@", $data);

  echo $data[0] -- Admin
  echo $data[1] -- 12345
  echo $data[2] -- salam
  echo $data[3] -- nicat



 */

?>