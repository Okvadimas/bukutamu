
<!DOCTYPE html>
<html>
<head>

	
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HALAMAN TAMU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <div class="container">
  	<div class="page-header">
  		<tr>
  			<td>
			<a class="btn btn-primary btn-lg" href="home.php">HOME</a>
		</td>
  		</tr>
  		<tr> 
		<td>
			<a class="btn btn-primary btn-lg" href="tampilawal.php">Form Anggota</a>
		</td>
		<td>
			
			<a  class="btn btn-primary btn-lg" href="tampilawalNON.php">Form Non Anggota</a>
		</td>
	</tr>
<h3 align="center">FORM ANGGOTA</h3>
</div>
	<p  align="center" style=" margin-top:10px; font-weight: bold; color: red; font-family: arial;">Masukan Nomor Keanggotaan Anda Pada Kolom Dibawah ini!</p>
<form action="" method="get">
	<table style="float: right;" class="table" width="400px">
	<tr >
			<td>NIM</td>
			<td></td>
			<td>
				<input class="form-control" type="text" name="nim" placeholder="Masukan ID Anggota" size="30">
			</td>
			<td></td>
			<td style="float: right;">
				<button class="btn btn-success btn-sm" type="submit" name="cek">Cek Id</button>
			</td>
		</tr>
	</table>

</form>
<?php 
include 'koneksi.php';
 if(isset($_GET['nim']) && $_GET['nim']!= '') {
 	$data = mysqli_query($konek , "SELECT * FROM anggota WHERE nim='$_GET[nim]'");
 	$dta = mysqli_fetch_assoc($data);
 	$nim = $dta['nim'];
 	echo "
 	<form action='' method='post'>
	<table class='table' >
		<tr>
			<td>Nama</td>
			<td></td>
			<td>
			<input class='form-control' type='hidden' name='nim' size='30' value='$dta[nim]'>
				<input class='form-control' type='text' name='nama' size='30' value='$dta[nama]'>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td></td>
			<td>
				<input class='form-control' type='text' name='jurusan' size='30' value='$dta[jurusan]'>
			</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td></td>
			<td>
				<input class='form-control' type='text' name='program_studi' size='30' value='$dta[program_studi]'>
			</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td></td>
			<td>
				<select class='form-control' name='Tujuan'> 
					<option value='' selected>-Tujuan Kunjungan-</option>
					<option>Kunjungan Biasa Membaca</option>
					<option>Refleshing</option>
					<option>Tugas Kuliah</option>
					<option>Pencarian Literatur</option>
					<option>Pengembalian Buku</option>
					<option>Pendaftaran Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class= 'btn btn-success btn-lg' type='submit' name='tambah'>Simpan</button>
				</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<img src ='img/$dta[foto]' width = '200' height ='200'>
				
			</td>
		</tr>
	</table>
</form>

 	";
 }else {

 	echo "
 	<form action='' method='post'>
	<table class='table' >
		<tr>
			<td>Nama</td>
			<td></td>
			<td>
				<input class='form-control' type='text' name='nama' size='30' value=''>
			</td>
		</tr>
		<tr>
		<td>Jurusan</td>
		<td></td>
		<td>
			<input class='form-control' type='text' name='jurusan' size='30' value=''>
		</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td></td>
			<td>
				<input class='form-control' type='text' name='program_studi' size='30' value=''>
			</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td></td>
			<td>
				<select class='form-control' name='Tujuan'> 
					<option value='' selected>-Tujuan Kunjungan-</option>
					<option>Kunjungan Biasa Membaca</option>
					<option>Refleshing</option>
					<option>Tugas Kuliah</option>
					<option>Pencarian Literatur</option>
					<option>Pengembalian Buku</option>
					<option>Pendaftaran Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class='btn btn-success btn-lg' type='submit' name='tambah'>Simpan</button>
				</td>
		</tr>
	</table>

</form>



 	";
 	echo "</div>";
 }


?>
<hr/>
<i style="margin-left: 10px;"> UNIVERSITAS SEMARANG 2023</i>
<?php 
 if (isset($_POST['tambah'])){
 	include 'koneksi.php';
 	$nim = $_POST['nim'];
 	$nama    = htmlspecialchars(strtolower($_POST['nama']));
 	$jurusan = htmlspecialchars(strtolower($_POST['jurusan']));
 	$program_studi  = htmlspecialchars(strtolower($_POST['program_studi']));
 	$Tujuan  = htmlspecialchars(strtolower($_POST['Tujuan']));

 	if ($nama == '' || $program_studi =='' || $Tujuan ==''){
 		echo "
 		<script>
 		alert('data belum lengkap');
 		document.location.href = 'tampilawalNON.php';
 		</script>
 		";
 	}
 		$today = '20' . sprintf(date('y-m-d'));
 		$tglkunjung = $today;


 		$simpan = mysqli_query($konek , "INSERT INTO tamu2 VALUES (null,'$nim','$nama','$tglkunjung','$Tujuan')
 			");
 		if ($simpan){
 			echo "
 		<script>
 		alert('data berhasil disimpan');
 		alert('SELEMAT DATANG DI PERPUSATAKAAN SEKOLAH');
 		document.location.href = 'tampilawal.php';
 		</script>
 		";
 		}else {
 			echo "
 		<script>
 		alert('data gagal disimpan');
 		document.location.href = 'tampilawal.php';
 		</script>
 		";
 		}
 	}
 


 ?>
