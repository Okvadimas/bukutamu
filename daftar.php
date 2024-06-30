<?php 
include 'koneksi.php';
$today = date('ymd');

$query = mysqli_query($konek ,"SELECT max(nim) AS last FROM anggota WHERE nim LIKE '$today%'");
$data = mysqli_fetch_assoc($query);

// $stmt = $konek->prepare("SELECT max(nim) AS last FROM anggota WHERE nim LIKE ?");
// $stmt->bind_param("s", $today . '%');
// $stmt->execute();
// $result = $stmt->get_result();
// $data = $result->fetch_assoc();

$lastnim = $data['last'];
$lastnim = substr($lastnim, 6 , 4);
$nextnim = $lastnim;
$nextnim = $today . sprintf('%04s' , $nextnim );
include 'headerAD.php';
 ?>
 <div class="container">
 	<div class="page-header">
 	 <h2 >MENU PENDAFTARAN</h2>
 	</div>
<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-bordered" align="center">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="nomor"  size="30"  placeholder="Masukan NIM Calon Anggota">
			</td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Calon Anggota" size="30">
			</td>
		</tr>
		<tr>
			<td>Asal jurusan</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="jurusan" placeholder="Masukan Nama jurusan" size="30">
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="program_studi" placeholder="Masukan Program Studi" size="30">
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td>
				<input type="file" name="foto" size="30">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success" type="submit" name="simpan">SIMPAN</button>
			</td>
		</tr>
	</table>
</div>
</form>
<?php 
if (isset($_POST['simpan']) ) {
	$nomor = htmlspecialchars(strtolower($_POST['nomor']));
	$nama  = htmlspecialchars(strtolower($_POST['nama']));
	$jurusan = htmlspecialchars(strtolower($_POST['jurusan']));
	$program_studi  = htmlspecialchars(strtolower($_POST['program_studi']));
	$foto  = $_FILES['foto'];
	$namaFile = $_FILES['foto']['name'];
	if ($foto == '' || $_FILES['foto']['tmp_name'] == ''){
		echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'daftar.php';
		</script>
		";
		exit();
	} 
	$ekstensiValid = ['jpg','jpeg','png'];
	$ekstensi     = explode('.', $namaFile);
	$ekstensi     = strtolower(end($ekstensi));
	if (!in_array($ekstensi, $ekstensiValid) ) {
		echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
		exit();
	}else {
		$filePath  = uniqid();
		$filePath .= '.';
		$filePath .= $ekstensi;

		move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $filePath);
	}


		$simpan = mysqli_query($konek , "INSERT INTO anggota(nim,nama,jurusan,program_studi,foto) VALUES('$nomor','$nama','$jurusan',
			'$program_studi','$filePath')");
		if (!$simpan){
			echo "
			<script>
			alert('data gagal disimpan');
			document.location.href = 'daftar.php'
			</script>
			";
		}else {
			echo "
			<script>
			alert('data berhasil disimpan');
			document.location.href = 'daftar.php'
			</script>
			";
		}
}

	

 ?>


 <?php include 'footer.php'; ?>