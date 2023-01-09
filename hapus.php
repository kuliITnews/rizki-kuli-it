<?php 
include "config.php";
$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa");



$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: mahasiswa.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>