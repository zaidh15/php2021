<h1 style = "text-align: center;">Belanja Online</h1>
<form method="POST" action="form_belanja.php">
<label>Customer : </label>
<input type="text" name="nama" /><br/>

<label>Produk Pilihan : </label>
<select name="produk">
  <option value="">-- Pilih Produk --</option>
  <option value="TV">TV - RP.1.250.000</option>
  <option value="Kulkas">Kulkas - Rp.1.800.000</option>
  <option value="Mesin Cuci">Mesin Cuci - Rp.3.400.000</option>
  <option value="AC">AC - Rp.3.100.000</option>
</select><br/>

<label>Jumlah Beli : </label>
<input type="text" name="jumlah" /><br/>

<input type="submit" name="proses" value="simpan"/><br/>

</form>
<hr style="border: 5px solid black;">

<?php

//tangkap request
$nama = @$_POST['nama'];
$produkBeli = @$_POST['produk'];
$jumlahBeli = @$_POST['jumlah'];
/*
//kondisional if 
if($produkBeli == 'TV') $hargasatuan = '1250000';
elseif($produkBeli == 'Kulkas') $hargasatuan = '1800000';
elseif($produkBeli == 'Mesin Cuci') $hargasatuan = '3400000';
elseif($produkBeli == 'AC') $hargasatuan = '3100000';
else $hargasatuan = ' ';
*/

//switch case

switch ($produkBeli) {
  case 'TV': $hargasatuan = 1250000 ; break;
  case 'Kulkas': $hargasatuan = 1800000 ; break;
  case 'Mesin Cuci': $hargasatuan = 340000 ; break;
  case 'AC': $hargasatuan = 3100000 ; break;
  
  default: $hargasatuan = ' ' ; break;
}

//total belanja
@$total = $jumlahBeli * $hargasatuan;

//potongan diskon
$diskon = $total * 15/100;

//pajak 10%
$pajak = ($total - $diskon) * 10/100;

//harus dibayar
$harusBayar = $total + $pajak - $diskon;

echo 'Customer : '.$nama;
echo '<br/>Produk Pilihan : '.$produkBeli;
echo '<br/>Jumlah Beli : '.$jumlahBeli;
echo '<br/>Harga Satuan : '.$hargasatuan;
echo '<br/>Total Belanja : '.$total;
echo '<hr>Potonga Diskon : '.$diskon;
echo '<br/>Pajak 10% : '.$pajak;
echo '<hr>Harus Dibayar : '.$harusBayar;

?>

