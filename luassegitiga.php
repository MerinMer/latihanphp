<?php
function luas_segitiga ($alas, $tinggi) {
    return (1/2 * $alas * $tinggi);
}
$a = 10;
$t = 20;
echo "<b>luas segitiga : </b><br>";
echo luas_segitiga($a, $t);
?> 