<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title>portofolio Kuli IT</title>
      <link href="css/index.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="js/script.js"></script>
  </head>
  <!-- SCRIPT konksi PHP -->
  <?php
  include 'config.php';
  error_reporting(0);
  ?>
    <body>
	  
        <div class="container">
	  
		<!--────────────────Header───────────────-->
	<header>
		<a class="logo" href="#home">
              <img src="asset/profil.png" alt="logo" />
		</a>
		<nav>	
		 <ul class="nav-bar"><div class="bg"></div>
			<li><a class="nav-link active" href="#home">Home</a></li>
			<li><a class="nav-link" href="mahasiswa.php">database mahasiswa</a></li>
			<li><a class="nav-link" href="matkul.php">matkul</a></li>
		 </ul>
			
			<div class="hamburger">
				<div class="line1"></div>
            <div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
	</header>
	<main>
		<!--─────────────────Home────────────────-->
	  <div id="home">
		  <div class="filter"></div>
		  <section class="intro">
			<img src="asset/data.png" alt="" width="300">
		  <h3>data-data universal<hr></h3>
		  <p>website yang dibuat menggunakan Hypertext Preprocessor atau PHP murni <br> yang mengandung data-data yang bersifat universal dan hanya sebagai percobaan data Analyst mengenai Nama, alamat, NIM, Email dan lainnya</p>
		  <!--────social media links─────-->
			 
		  <div class="social-media">
			  <a href="#" target="_blank"><i class='fab fa-codepen'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-twitter'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-github'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-linkedin-in'></i></a>
			  <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
		    </div>
			 
		 </section> 
	  </div>  
		
	  <!--───────────────Projects Anda───────────────-->
	  <div id="projects"> 
		 <h3>data mahasiswa<hr></h3>
		  <p>data-data mahasiswa yang sudah terinputkan didatabase, <br> cari mahasiswa berdasarkan Nama dan NIM , klik Nama mahasiswa untuk melihat data lengkapnya .</p>
		  <div class="work-box">
			<!-- search -->
			  <form action="" method="post">
				  <input class="input" type="text" name="cari">
				  <input class="submit" type="submit" name="button" id="">
			  </form>
		  <div class="work">
		<!--───────────────card───────────────-->
		<!-- looping php -->
		<?php
		   $cari = $_POST['cari'];
		   if ($cari != '') {
			$datas = mysqli_query($conn, "SELECT * FROM mahasiswa 
			WHERE 
			nim LIKE '%".$cari."%' OR 
			nama LIKE '%".$cari."%'
			"); 
			echo "<h3> $cari  : </h3>";  
		   } else {
			$datas = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id desc limit 3");
			echo "<h3>3 Data teakhir : </h3>";

		   }
		  while($data = mysqli_fetch_array($datas)) {
		?>
			<div class="card">
			    <img class="work-img" src="asset/<?= $data["profile"] ?>">
				<a href="mahasiswa.php"> 
				<div class="work-content"><?= $data ["nama"] ?> <br> <?= $data ["nim"] ?></div></a>
				<div class="work-content"></div></a>
            </div>
        <?php } ?> 
		  </div>
		  </div>
	  </div>
		 
		<!--──────────────Contact────────────────-->
	  <div id="contact">
		  <!--────social media links─────-->
		   <h3>Mata Kuliah.<hr></h3>
		   <p>mata perkuliahan semester 1 universitas bina sarana informatika</p>
		    <div class="social-media">
			  <a href="#" target="_blank"><i class='fab fa-codepen'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-twitter'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-github'></i></a>
			  <a href="#" target="_blank"><i class='fab fa-linkedin-in'></i></a>
			  <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
		    </div>
		  </div>

	</main>
	  <footer>
      
    </footer>
	  
  </div>
  
  </body>
</html>