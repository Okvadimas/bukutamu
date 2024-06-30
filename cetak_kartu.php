<?php 
include 'koneksi.php';
$data = mysqli_query($konek, "SELECT * FROM anggota");

// $stmt = $konek->prepare("SELECT * FROM anggota");
// $stmt->execute();
// $result = $stmt->get_result();

include 'headerAD.php';
 ?>
 <style >
 	table{
 		margin-top: 50px;
 		border-collapse: collapse;
 	}
 	footer{
 		margin-top:200px;
 	}
 </style>
 <div class="container">
 	<div class="page-header">
 		<h2>HALMAN CETAK KARTU</h2>
 	</div>	
<table class="table table-bordered table-striped ">
	<tr>
		<th>NO</th>
		<th>FOTO</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PROGRAM STUDI</th>
		<th>AKSI</th>
		
	</tr>
	<?php
	$i=1; 
	while($dta =mysqli_fetch_assoc($data)):
	 ?>
	<tr>
		<td style="text-align: center;"><?= $i ?></td>
		<td>
			<img src="img/<?= $dta['foto'] ?>" width="89" height="95">
		</td>
		<td><?= $dta['nim'] ?></td>
		<td><?= $dta['nama'] ?></td>
		<td><?= $dta['program_studi'] ?></td>
		<td>
		    <a class="btn btn-warning btn-sm" href="editAA.php?id=<?= $dta['nim'] ?>">UPDATE</a> 
			<a class="btn btn-danger btn-sm" href="hapusAA.php?id=<?= $dta['nim'] ?>" onclick= "return confirm('apakah anda yakin ingin menghapus data?')">DELETE</a>
			<a class="btn btn-success btn-sm" href="cetak_kartu_proses.php?id=<?= $dta['idanggota'] ?>" target="_blank" >CETAK KARTU</a>
			
		</td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</div>
 <?php include 'footer.php'; ?>