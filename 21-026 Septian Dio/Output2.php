<HTML>
<HEAD><TITLE>SIMPAN</TITLE></HEAD>
<link rel="stylesheet" type="text/css" href="identitas.css">
<BODY>
<div class="wrap">
	<div class="string">
		<h1>Data Pribadi</h1>
		<?PHP
			$name = ($_POST["nama_lengkap"]);
			$date = ($_POST["tanggal_lahir"]);
			$jk = ($_POST["jk"]);
			$no_telefon = ($_POST["no_telefon"]);

			echo "Nama lengkap =",$name,"<br>";
			echo "tanggal lahir =",$date,"<br>";
			echo "jenis kelamin =",$jk,"<br>";
			echo "no telefon =",$no_telefon,"<br>";
		?>
	</div>
</div>
</BODY>
</HTML>