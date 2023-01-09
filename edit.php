<?php 
include "config.php";
$id = $_GET["id"];
$datas = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
$data = mysqli_fetch_array($datas);

if ( isset($_POST['edit']))
 {
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email = htmlspecialchars($_POST['email']);
    $profile = htmlspecialchars($_POST['gambar']);

    $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan', alamat = '$alamat', email = '$email', profile = '$profile' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: mahasiswa.php");
    } else {
        echo "Error kohh  " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    // echo "
    //        <script>
    //         alert ('data berhasil diupdate')
    //         document.location.href = 'mahasiswa.php';
    //         </script>
    //         ";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>tambah data mahasiswa</title>
</head>

<body>
    <div class="con">
    <div class="div">
    </div>
    <form action="" method="post">
                <label for="nama">NAMA : </label> <br>
                <input type="text" name="nama" id="nama" value="<?= $data["nama"] ?>">
                <br>
            
        
                <label for="nim">NIM : </label><br>
                <input type="text" name="nim" id="nim" value="<?= $data["nim"]?>">
                <br>
            
        
                <label for="jurusan">JURUSAN : </label> <br>
                <input type="text" name="jurusan" id="jurusan" value="<?=$data["jurusan"]?>">
                <br>
            
        
                <label for="alamat">ALAMAT : </label> <br>
                <input type="text" name="alamat" id="alamat" value="<?=$data["alamat"]?>">
                <br>
            
        
                <label for="email">EMAIL : </label> <br>
                <input type="text" name="email" id="email" value="<?=$data["email"]?>">
            <br>
            
                <label for="gambar">PROFIL : </label><br>
                <input type="text" name="gambar" id="gambar" value="<?=$data["profile"]?>">
            
            <br>
            <div class="fother">
            <a href="mahasiswa.php"><- Go Back</a>
            <button type="submit" name="edit"  class="cssbuttons-io-button" id="button"> INSERT DATA
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                </div>
            </button>
    </form>
    </div>
</body>
</html>
