<?php include 'koneksi.php'; 

$anggota = mysqli_query($konek , "SELECT * FROM anggota WHERE nim = '$_GET[id]'");
$ad = mysqli_fetch_assoc($anggota);

// // Menggunakan prepared statements untuk mengamankan query
// $stmt = $konek->prepare("SELECT * FROM anggota WHERE nim = ?");
// $stmt->bind_param("i", $id); // "i" menandakan bahwa parameter adalah integer
// $stmt->execute();
// $result = $stmt->get_result();

// $ad = $result->fetch_assoc();

include 'headerAD.php';
?>
	<div class="container">
	<div class="page-header">
<h2> EDIT DATA ANGGOTA </h2>
	</div>
<form action="" method="post">
<table class=" table table bordered" align="center">
<input type="hidden" name="idanggota" value="<?= $ad['idanggota'] ?>" hidden>
	<tr >
		<td>NIM</td>
		<td>:</td>
		<td>
			<input type="text" name="nim" value="<?= $ad['nim'] ?>" readonly>
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input class="form-control" type="text" name="nama" size="30" max="100" value="<?= $ad['nama'] ?>">
		</td>
	</tr>
	<tr>
	<td>Jurusan</td>
		<td>:</td>
		<td>
			<input class="form-control"  type="text" name="jurusan" size="30" maxlength="100" value="<?= $ad['jurusan'] ?>">
		</td>
	</tr>
	<tr>
	<td>Program Studi</td>
		<td>:</td>
		<td>
			<input class="form-control"  type="text" name="program_studi" size="30" maxlength="100" value="<?= $ad['program_studi'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">UPDATE</button>
		</td>
	</tr>
</table>
<form>
<?php 
if (isset($_POST['ubah']) ) {
	$idanggota 	= $_POST['idanggota'];
	$nim 	= $_POST['nim'];
	$nama 		= $_POST['nama'];
	$jurusan 	= $_POST['jurusan'];
	$program_studi 	= $_POST['program_studi'];

		$edit = mysqli_query($konek , "UPDATE anggota SET 
			idanggota	        = '$idanggota',
			nim                 = '$nim',
			nama		        = '$nama',
			jurusan	            = '$jurusan',
			program_studi		= '$program_studi' WHERE idanggota = '$idanggota'
			");
		if ($edit) {
			echo "
			<Script>
			alert('data admin berhasil disimpan');
			document.location.href = 'tampilAA.php';
			</script>
			";
		}else {
			echo "
			<Script>
			alert('data admin gagal disimpan');
			document.location.href = 'editAA.php';
			</script>
			";
		}
	}



 ?>

<?php include 'footer.php'; ?>