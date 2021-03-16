<?php
echo '<h1>Break Continue</h1>';

$x = 0;

while ($x <= 20) {
    $x++;
    if ($x == 13) continue;
    echo '<br>Bilangan : '.$x;
    if ($x == 12){
        echo '<hr>';
    }
    if ($x == 17) break;
    
}
    echo '<br>Selesai';