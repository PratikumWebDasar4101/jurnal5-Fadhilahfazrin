<form action="" method="post">
 	<h1>Masukan Komentar</h1>
 	Komentar : <textarea name="komentar" rows="5" cols="40"></textarea><br>
 	<input type="submit" name="submit" value="Kirim">
 </form>

 <?php 
if (isset($_POST['submit'])) {
	$komentar = $_POST['komentar'];

	$count = explode(" ", $komentar);
	if (count($count) < 5) {
		echo "Jumlah kata tidak sampai 5 karakter";
	} else {
		echo "Jumlah kata di komentar : ".count($count)." kata";
	}
}
?>
