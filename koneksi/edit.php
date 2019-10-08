<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP </title>
</head>
<body>
	<a href="tampill.php">KEMBALI</a>
<?php
	include 'koneksi.php';
	$id   = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from komentar where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Komentar</td>
					<td><input type="text" name="komentar" value="<?php echo $d['komentar']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>