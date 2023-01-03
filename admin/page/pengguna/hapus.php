<?php
include "../koneksi.php";
$id = $_GET['id'];
$connect->query("DELETE FROM tb_admin WHERE id ='$id'");
?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href = "?page=pengguna";
</script>