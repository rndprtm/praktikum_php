<?php
$ns1 = ['id1'=>1, 'nim'=>'1001', 'uts'=>80, 'tugas'=>90];
$ns2 = ['id1'=>2, 'nim'=>'1002', 'uts'=>90, 'tugas'=>92];
$ns3 = ['id1'=>3, 'nim'=>'1003', 'uts'=>70, 'tugas'=>93];
$ns4 = ['id1'=>4, 'nim'=>'1004', 'uts'=>60, 'tugas'=>94];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3>Daftar Nilai</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($ar_nilai as $nilai) {
            $nilai_akhir = ($nilai['uts'] + $nilai['tugas']) / 2;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $nilai['nim'] ?></td>
                <td><?= $nilai['uts'] ?></td>
                <td><?= $nilai['tugas'] ?></td>
                <td><?= $nilai_akhir ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>