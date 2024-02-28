<?php
$ns1 = ['id'=>1, 'nim'=>'1001','uts'=>80,'uas'=>80, 'tugas'=>90];
$ns2 = ['id'=>2, 'nim'=>'1002','uts'=>90,'uas'=>80, 'tugas'=>92];
$ns3 = ['id'=>3, 'nim'=>'1003','uts'=>70,'uas'=>80, 'tugas'=>93];
$ns4 = ['id'=>4, 'nim'=>'1004','uts'=>60,'uas'=>80, 'tugas'=>94];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<h3>Daftar Nilai</h3>
<table border="1" width= "100%">
<thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Tugas Akhir</th>
    </tr>
</thead>
<tbody>
<?php $no=1;
        foreach ($ar_nilai as $nilai) { ?>
        <tr>
            <td><?= $no ?></td>
        <td><?= $nilai ['nim'] ?></td>
        </tr>

        <?php $no++; } ?>
</tbody>
</table>