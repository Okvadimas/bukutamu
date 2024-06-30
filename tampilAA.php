<?php 
include 'koneksi.php';
$data = mysqli_query($konek ,"SELECT * FROM anggota");

// $stmt = $konek->prepare("SELECT * FROM anggota");
// $stmt->execute();
// $result = $stmt->get_result();

include 'headerAD.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA ANGGOTA</title>
	<style >
		/*table{
			width: 200px;
		}*/
	</style>
</head>
<body>
	<div class="container">
	<div class="page-header">
<h2> DATA ANGGOTA</h2>
	</div>
<table style="margin-top: 10px;" class="table table-bordered table-striped">
 		<tr>
		<th style="text-align: center;">No</th>
        <th>Foto</th>
        <th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
        <th>Program Studi</th>
		<th>Aksi</th>
	</tr>
	<?php 
	$i=1;
	while($dta = mysqli_fetch_assoc($data) ) :
	 ?>
	<tr>
		<td width="30px" style="text-align: center;"><?= $i; ?></td>
        <td width="100px" align="center">
            <img src="img/<?= $dta['foto'] ?>" width="70" height="95">
        </td>
        <td width="100px"><?= $dta['nim'] ?></td>
		<td width="100px"><?= $dta['nama'] ?></td>
		<td width="100px"><?= $dta['jurusan'] ?></td>
        <td width="100px"><?= $dta['program_studi'] ?></td>
		<td width="175px ">
			<a class="btn btn-warning btn-sm" href="editAA.php?id=<?= $dta['nim'] ?>">UPDATE</a> 
			<a class="btn btn-danger btn-sm" href="hapusAA.php?id=<?= $dta['nim'] ?>" onclick= "return confirm('apakah anda yakin ingin menghapus data?')">DELETE</a>
            <a class="btn btn-success btn-sm" href="cetak_kartu_proses.php?id=<?= $dta['idanggota'] ?>" target="_blank" >CETAK KARTU</a>
		</td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</div>
</body>
</html>
<?php include 'footer.php'; ?>