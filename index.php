<!doctype html>
<html>
<head>
	<title>kalkulator</title>
	</style>
</head>
<body>
	<div>
		<div>
			<?php
			if(isset($_POST['hitung'])){
				$bilangan1=$_POST['bil1'];
				$bilangan2=$_POST['bil2'];
				$bilangan3=$_POST['bil3'];
				$operasi=$_POST['operasi'];
				switch($operasi){
					case 'tambah':
						$hasil=$bilangan1+$bilangan2+$bilangan3;
						break;
					case 'kurang':
						$hasil=$bilangan1-$bilangan2-$bilangan3;
						break;
					case 'kali':
						$hasil=$bilangan1*$bilangan2*$bilangan3;
						break;
					case 'bagi':
						$hasil=$bilangan1/$bilangan2/$bilangan3;
						break;
				}
				
			}
			echo"<center><form method='post' action='index1.php'>
			<input type='text' name='bil1' placeholder='Bilangan 1'><br><br>
			<input type='text' name='bil2' placeholder='Bilangan 2'><br><br>
			<input type='text' name='bil3' placeholder='Bilangan 3'><br><br>
			<select name='operasi'>
				<option value='tambah'>+</option>
				<option value='kurang'>-</option>
				<option value='kali'>x</option>
				<option value=bagi>/</option>
			</select>
			<input type='submit' name='hitung' value='hitung'>
			</form></center>";
			?>
			<?php
			echo"<br>";
			if(isset($_POST['hitung'])){
				echo "<center>Hasil = $hasil</center>";
			}else{
				echo"<center>Hasil = </center>";
			}
			?>
		</div>
	</div>
</body>
</html>