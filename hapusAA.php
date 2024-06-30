<?php 
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';

	$hapus = mysqli_query($konek, "DELETE FROM anggota WHERE nim = '$_GET[id]'");

	// // Menggunakan prepared statements untuk keamanan
	// $stmt = $konek->prepare("DELETE FROM anggota WHERE nim = ?");
	// $stmt->bind_param("s", $_GET['id']); // s - satu string
	// $hapus = $stmt->execute();

	if (!$hapus) {
		echo "
		<script>
		alert('data gagal dihapus');
		document.location.href = 'tampilAA.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('data berhasil dihapus');
		document.location.href = 'tampilAA.php';
		</script>
		";
	}
} else {
	echo "
	<script>
	alert('anda tidak memiliki akses dihalaman ini');
	document.location.href = 'loginAD.php';
	</script>
	";
}
?>