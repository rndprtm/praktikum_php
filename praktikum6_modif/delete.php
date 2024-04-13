<?php
include 'koneksi.php';

// check if 'id' is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // delete the row from the 'mahasiswa' table where 'id' matches the 'id' from the URL
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    $result = $conn->query($query);

    if($result) {
        // if the query is successful, redirect to the main page
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No id provided to delete";
}
?>