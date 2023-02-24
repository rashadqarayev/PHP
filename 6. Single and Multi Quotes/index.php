<?php

// PHP - Tek ve cut dirnaqlar arasindaki ferq

// echo '<a href="dasad">hello <a/>';
// echo "<a href=\"dasad\">hello <a/>";

$ad = "Reshad";

// Cut dirnaq oldugu ucun variableni icinde yaza bilerik
// echo "Salam, $ad" ; -- Salam Reshad

// Tek dirnaqda ise onu variable kimi oxumur
// echo 'Salam, $ad' -- Salam $ad

// Eger onu variableye cevirmek isteyirikse
// echo 'Salam, '.$ad.'' -- Salam, Reshad


// Normal halda bu Reshad kimi oxunur, eger biz onu variable kimi yox simvol kimi oxumaq isteyirikse, $ isaresinden evvele \ atirig
// echo "$ad"   --- Reshad
echo "\$ad"

?>