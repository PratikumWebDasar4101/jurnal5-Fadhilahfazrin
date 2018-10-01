<?php
$error_nim = "";
if (isset($_POST['submit'])) {
	$nim = htmlspecialchars(stripcslashes(trim(($_POST['nim']))));
	if ($nim == "") {
		$error_nim = "NIM tidak boleh kosong";
	} else {
		if (strlen($nim)<>10 && !is_numeric($nim)) {
			$error_nim = "NIM harus 10 digit dan harus berupa angka";
		}
	}
}

$error_nama = "";
if (isset($_POST['submit'])) {
	$nama = htmlspecialchars(stripcslashes(trim(($_POST['nama']))));
	if ($nama == "") {
		$error_nama = "Nama tidak boleh kosong";
	} else {
		if (strlen($nama)>25 && is_string($nama)) {
			$error_nama = "Nama harus 25 digit dan harus berupa huruf";
		}else{
			echo "<h2>Data Anda</h2>";
			echo "NIM : ".$nim;
			echo "<br>";
			echo "Nama : ".$nama;
			echo "<br>";
			echo "Email : ".$_POST['email'];
			echo "<br>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form action="registrasi.php" method="post">
	<h2>Selamat datang</h2>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
			<td><div style="color:red"><?php echo $error_nim; ?></div></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
			<td><div style="color:red"><?php echo $error_nama; ?></div></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>
</form>
</body>
</html>
