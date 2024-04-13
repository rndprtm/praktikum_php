<?php

include 'koneksi.php'; // added missing semicolon

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];

$query = "INSERT INTO mahasiswa (nama, nim, jurusan, semester) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($query); // prepared statement
$stmt->bind_param("ssss", $nama, $nim, $jurusan, $semester); // bind parameters, changed "is" to "ss"

if($stmt->execute()) { // execute statement
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>