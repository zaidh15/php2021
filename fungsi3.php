<?php
//membuat fungsi return value
function hitung($a,$b){
    $c = $a + $b;
    return $c;
}
//panggil fungsi
$x = 30; $y = 120;
$z = hitung($x,$y);
echo "Hasil penjumlahan $x + $y = $z";
echo "<br/>Hasil penjumlahan 553 + 2 = ".hitung(553,2);