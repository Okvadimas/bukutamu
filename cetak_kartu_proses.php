<?php 
include 'koneksi.php';

$data = mysqli_query($konek, "SELECT * FROM anggota WHERE idanggota = '$_GET[id]'");
$dta = mysqli_fetch_assoc($data);

// // Menggunakan prepared statements untuk keamanan
// $stmt = $konek->prepare("SELECT * FROM anggota WHERE idanggota = ?");
// $stmt->bind_param("i", $id); // "i" menandakan bahwa parameter adalah integer
// $stmt->execute();
// $result = $stmt->get_result();
// $dta = $result->fetch_assoc();

 ?>
 <style >
 	@media print{
 		.print{
 			color: blue
 			background-color: blue;
 		
 		}
 		.id{
 			display: none;
 		}

 	}
 	.id{
 		margin-left: 400px;
 	}
 	table{
 		margin-top: 50px;
 		font-family: ARIAL;
 	}

 	footer{
 		margin-top:200px;
 	}


 </style>
<table class="print" border="0" align="center" bgcolor="whitegreen">

		<th colspan="2" width="100" >PERPUSTAKAAN UNIVERSITAS SEMARANG</th>
		<tr>
		<td colspan="2"><strong>__________________________________</strong></td>
	</tr>
	<tr>
		<th>
			<img src="img/<?= $dta['foto'] ?>" width="60" height="70">
		</th>
		<td colspan="2"><strong><?= $dta['nama'] ?> <br/>
			<?= $dta['nim'] ?> <br/>
			<?= $dta['program_studi'] ?> <br/></strong>
			<tr>
				<td ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<i><h6>Universitas Semarang</h6></i>
				</td>
			</tr>
		</td>
		<tr>
			
		</tr>
	</tr>
		
</table>
<table class="print" border="0" align="center"  bgcolor="whitegreen">

		<th colspan="2" width="100" >PERPUSTAKAAN UNIVERSITAS SEMARANG</th>
		<tr>
		<td colspan="2"><strong>__________________________________</strong></td>
	</tr>
	<tr >

		<td colspan="3">
		1. Kartu Anggota Wajib Dibawa Setiap  Kali Berkunjung	
		<br>
		2. Kartu Anggota Tidak Dapat Dipinjamkan
		<br/>
		3. Apabila Kartu Anggota Hilang Harap membawa Surat Keterangan 
		<br/>
		 Hilang Dari Pihak Kepolisian	
		 <br>
		 <a  class="id" href="#" onclick="window.print()">CETAK</a>
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
</table>


