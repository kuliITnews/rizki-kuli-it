<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insert.css">
    <title>tambah data mahasiswa</title>
</head>

<?php
$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa");

if ( isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email = htmlspecialchars($_POST["email"]);
    $gambar = htmlspecialchars($_POST["gambar"]);

    $query = "INSERT INTO mahasiswa VALUE ('', '$nama', '$nim', '$jurusan', '$alamat', '$email', '$gambar' )";
    mysqli_query($conn, $query);
    echo "
            <script>
                alert ('data berhasil ditambahkan')
                document.location.href = 'mahasiswa.php';
            </script>
            ";
}
?>
<?php

?>
<body>
    <div class="con">
    <div class="div">
    </div>
    <form action="" method="post" enctype="multipart/form-data">
                <label for="nama">NAMA : </label> <br>
                <input type="text" name="nama" id="nama">
                <br>
            
        
                <label for="nim">NIM : </label><br>
                <input type="text" name="nim" id="nim">
                <br>
            
        
                <label for="jurusan">JURUSAN : </label> <br>
                <input type="text" name="jurusan" id="jurusan">
                <br>
            
        
                <label for="alamat">ALAMAT : </label> <br>
                <input type="text" name="alamat" id="alamat">
                <br>
            
        
                <label for="email">EMAIL : </label> <br>
                <input type="text" name="email" id="email">
            <br>
            
            <label for="gambar">PROFIL : </label><br>
            <input type="text" name="gambar" id="gambar">
            
            <br>
            <div class="fother">
            <a href="mahasiswa.php"><- Go Back</a>
            <button onclick= "return confirm('yaqin ingin menambahkan data  baru ? ')" type="submit" name="submit"  class="cssbuttons-io-button" id="button"> INSERT DATA
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                </div>
            </button>
    </form>
    </div>
</body>
</html>