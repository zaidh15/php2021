<h1 align="center">Data Siswa</h1>

<table align="center" cellpadding="10" cellspacing="3">
    <thead bgcolor="yellow">
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Matkul</th>
        </tr>
    </thead>
    <?php
    for ($i=1; $i <=20 ; $i++) { 
        $warna = ($i % 2 == 0) ? '#eaeaea' : '#e2ffff';
    ?>    
    <tbody bgcolor="<?= $warna; ?>">
        <tr>
            <td><?= $i; ?></td>
            <td>Mahasiswa ke <?= $i; ?></td>
            <td>Matkul ke <?= $i; ?></td>
        </tr>
    </tbody>
    <?php } ?>
</table>