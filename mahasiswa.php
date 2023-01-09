<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mahasiswa.css">
    <title>data mahasiswa</title>
  </head>
<?php 
include "config.php";
error_reporting(0);
?> 
<body>
    <div class="container">
        <div class="nav">
            <h1>Data Mahasiswa</h1>
            <a class="fancy" href="mahasiswa.php">
                <span class="top-key"></span>
                <span class="text">data mahasiswa</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <a class="fancy" href="#">
                <span class="top-key"></span>
                <span class="text">data penduduk</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <a class="fancy" href="index.php">
                <span class="top-key"></span>
                <span class="text">home</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </a>
            <a href="insert.php">
          <button class="continue-application">
                <div>
                    <div class="pencil"></div>
                    <div class="folder">
                        <div class="top">
                            <svg viewBox="0 0 24 27">
                                <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                            </svg>
                        </div>
                        <div class="paper"></div>
                    </div>
                </div>
                insert data +
            </button>    
        </a>
           <form class="form" action="" method="post">
                <button type="submit" name="cari">
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <input name="input" class="input" type="text" autofocus>
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>
            <?php
             
             ?>
        </div>
        <div class="main">
        <table class="tabel" border= "1"  cellspacing="0">
                <tr style=" height:50px; background-color: rgba(100,77,237,0.08); ">
                    <th style= width:50px;>NO</th>
                    <th style= width:100px;>Profil</th>
                    <th style= width:200px;>Nama</th>
                    <th style= width:100px;>NIM</th>
                    <th style= width:200px;>Jurusan</th>
                    <th style= width:250px;>Alamat</th>
                    <th style= width:280px;>Email</th>
                    <th style= width:100px;>delete</th>
                    <th style= width:100px;>edit</th>
                </tr>
                <?php $urut = 1;

                $cari = $_POST['input'];
                if ($cari != '') {
                     $datas = mysqli_query($conn, "SELECT * FROM mahasiswa 
                     WHERE 
                     nim LIKE '%".$cari."%' OR 
                     nama LIKE '%".$cari."%' OR
                     jurusan LIKE '%".$cari."%' OR
                     alamat LIKE '%".$cari."%' 
                     ");
                } else {
                     $datas = mysqli_query($conn, "SELECT * FROM mahasiswa");
                }
                 while($data = mysqli_fetch_array($datas)) {
                ?>
                <tr style="border:none;">
                    <td><?= $urut; ?></td>
                    <td><img src="asset/<?= $data ["profile"] ?>" alt="" width="100"></td>
                    <td><?= $data ["nama"] ?></td>
                    <td><?= $data ["nim"] ?></td>
                    <td><?= $data ["jurusan"] ?></td>
                    <td><?= $data ["alamat"] ?></td>
                    <td><?= $data ["email"] ?></td>
                    <td>
                        <a  onclick= "return confirm('yaqin ingin menghapus data ini ? ')" href="hapus.php?id=<?= $data ["id"]?>"><img src="asset/delete.png" width="50px" alt=""></a>
                    </td>
                    <td>
                        <a  href="edit.php?id=<?= $data ["id"]?>"><img src="asset/edit.png" width="50px" alt=""></a>
                    </td>
                </tr>
                <?php $urut++; ?>
                <?php }?>
            </table>
        </div>
    </div>
</body>
</html>