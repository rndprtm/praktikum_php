<?php

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th> <!-- added missing jurusan header -->
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
     
        <?php while( $row = $result->fetch_assoc() ) : ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nama'] ?> </td>
            <td> <?= $row['nim'] ?> </td>
            <td> <?= $row['jurusan'] ?> </td> <!-- added missing jurusan -->
            <td> <?= $row['semester'] ?> </td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Delete</a>
            <!-- added missing id parameters and added confirmation for delete action -->
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
</body>
</html>