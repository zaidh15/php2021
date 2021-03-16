<?php
require 'Bank.php';
//ciptakan object
$n1 = new Bank('111','Budi',5000000);
$n2 = new Bank('112','Dewi',8000000);
$n3 = new Bank('113','Ani',3000000);
$n4 = new Bank('114','Andi',7000000);
$n5 = new Bank('115','Zaid',10000000);
$n1->setor(4000000); $n3->setor(5000000);
$n2->ambil(5000000); $n3->ambil(1000000); $n5->setor(1000000);

echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak(); $n2->cetak(); $n3->cetak(); $n4->cetak(); $n5->cetak();
echo 'Jumlah Nasabah: '.Bank::$jml;