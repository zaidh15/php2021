<?php
//membuat fungsi void
function salam(){
    echo 'Assalamu\'alaikum Bro...';
}
//memanggil fungsi
salam();
function say($arg1){
    echo '<br/>Hallo Apa Kabar '.$arg1.' ?';
}
$siswa = 'Zaid';
say($siswa); say('Hilmi');
//say();
echo '<hr/>';
function tanya($arg1 = 'Zet'){
    echo '<br/>Sudah sarapan '.$arg1.' ?';
}
tanya(); tanya('Hilm');