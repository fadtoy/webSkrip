<!DOCTYPE html>
<html>
<head>
	<title>Web Dummy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="konten">
		<header>
			<?php
			echo date('l, d-m-Y');
			?>
			<h2 class="judul">Web Dummy Multi Bug</h2>
		</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=sql-injection">SQL INJECTION</a></li>
			<li><a href="index.php?page=file-upload">FILE UPLOAD</a></li>
			<li><a href="index.php?page=cross-site-scripting">CROSS SITE SCRIPTING</a></li>
			<li style="float: right;"><a href="index.php?page=kontak">KONTAK</a></li>
		</ul>
	</div>

	<div class="halaman">
		<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
				include "halaman/home.php";
				break;
				case 'sql-injection':
				include "halaman/sql-injection.php";
				break;
				case 'file-upload':
				include "halaman/file-upload.php";
				break;
				case 'cross-site-scripting':
				include "halaman/cross-site-scripting.php";
				break;
				case 'kontak':
				include "halaman/kontak/kontak.php";
				break;
				default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
			}
		}else{
			include "halaman/home.php";
		}
		?>
	</div>

		<div class="footer">
			<footer>
				<p>17412035 Zulfadli Wal Irfan - Teknik Informatika</p>
			</footer>
		</div>
	</div>
</body>
</html>