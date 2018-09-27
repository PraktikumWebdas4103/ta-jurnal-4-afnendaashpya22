<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca</td>
			<td><input type="checkbox" name="hobi[]" value="Bermusik">Bermusik</td>
			<td><input type="checkbox" name="hobi[]" value="Nonton">Nonton</td>
		</tr>
		<tr>
			<td>Genre Film yang disukai</td>
			<td>:</td>
			<td><input type="checkbox" name="genre[]" value="Horror">Horror</td>
			<td><input type="checkbox" name="genre[]" value="Action">Action</td>
			<td><input type="checkbox" name="genre[]" value="Anime">Anime</td>
			<td><input type="checkbox" name="genre[]" value="Thriller">Thriller</td>
			<td><input type="checkbox" name="genre[]" value="Animasi">Animasi</td>
		</tr>
		<tr>
			<td>Tempat Wisata Tujuan Travelling</td>
			<td>:</td>
			<td><input type="checkbox" name="travelling[]" value="Bali">Bali</td>
			<td><input type="checkbox" name="travelling[]" value="Raja Ampat">Raja Ampat</td>
			<td><input type="checkbox" name="travelling[]" value="Pulau Derawan">Pulau Derawan</td>
			<td><input type="checkbox" name="travelling[]" value="Bangka Belitung">Bangka Belitung</td>
			<td><input type="checkbox" name="travelling[]" value="Labuan">Labuan Bajo</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan">
				<input type="submit" name="edit" value="Edit">
				<input type="submit" name="delete" value="Hapus">
			</td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['submit'])) {	
		echo "Hobi : ";
		foreach ($_POST['hobi'] as $hobi) {
			echo $hobi .", ";
		}
		echo "<br><br>";

		echo "Genre film yang disukai adalah ";
		foreach ($_POST['genre'] as $genre) {
			echo $genre .", ";
		}
		echo "<br><br>";

		echo "Tempat yang ingin dikunjungi adalah "; 
		foreach ($_POST['travelling'] as $travelling) {	
			echo $travelling .", ";
		}
		echo "<br><br>";

		$foto = $_FILES['foto']['name'];
		echo "<img src='$foto'>";
	}
?>