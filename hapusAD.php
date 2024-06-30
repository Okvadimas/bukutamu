<?php 
session_start();
if (isset($_SESSION['login']) ){
	include 'koneksi.php';

	$hapus = mysqli_query($konek , "DELETE FROM admin WHERE idadmin = '$_GET[id]'");
	if (!$hapus) {
		echo "
		<script>
		alert('data gagal dihapus');
		document.location.href = 'tampilAD.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('data berhasil dihapus');
		document.location.href = 'tampilAD.php';
		</script>
		";
	}

	// // Menggunakan prepared statements untuk mengamankan operasi DELETE
	// $stmt = $konek->prepare("DELETE FROM admin WHERE idadmin = ?");
	// $stmt->bind_param("i", $id); // "i" menandakan bahwa parameter adalah integer
	// $stmt->execute();

	// if ($stmt->affected_rows > 0) {
	// 	echo "<script>alert('Data berhasil dihapus'); document.location.href = 'tampilAD.php';</script>";
	// } else {
	// 	echo "<script>alert('Data gagal dihapus'); document.location.href = 'tampilAD.php';</script>";
	// }

	// $stmt->close();
	// $konek->close();

}else {
	echo "
	<script>
	alert('anda tidak memiliki akses dihalaman ini');
	document.location.href = 'loginAD.php';
	</script>
	";
}

 ?>