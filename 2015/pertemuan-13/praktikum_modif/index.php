<?php
require 'helper/functions.php';
$conn = konek();

if( isset($_POST["pilih"]) ) {
	$daftar_film = query($conn, "SELECT film_id, title FROM film WHERE title LIKE '{$_POST["film"]}%'");
}

?>

<!doctype html>
<html>
<head>
	<title>Latihan Praktikum Pertemuan 12</title>
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/gumby.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="../__js__/jquery-2.0.3.js"></script>
</head>
<body>

	<form action="" method="post" id="cari-film">
		<h2>Cari Film Berdasarkan Nama</h2>
		<div class="picker">
			<select name="film" id="film">
				<?php 
				 $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
				 foreach( $alphabet as $huruf ) : ?>
				 	<option value="<?= $huruf ?>"><?= $huruf ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<button type="submit" name="pilih" id="pilih">Pilih</button>
	</form>

	<div id="container">
		<?php if( isset($daftar_film) ) : ?>
		<ol>
			<?php foreach( $daftar_film as $film ) : ?>
				<li><a href="detail_film.php?id=<?= $film["film_id"]; ?>"><?= $film["title"]; ?></a></li>
			<?php endforeach; ?>
		</ol>
		<?php endif; ?>
	</div>

	<div class="details">
		<div class="content">
			<img src="images/loader.gif" class="loader">
			<a class="close"><i class="icon-cancel" /></i></a>
			<div class="result"></div>
		</div>
	</div>

<script src="js/script.js"></script>
</body>
</html>