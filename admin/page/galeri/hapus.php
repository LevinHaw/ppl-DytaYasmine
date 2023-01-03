<?php
$id = $_GET['id'];
$connect->query("DELETE FROM tb_galeri WHERE id_galeri ='$id'");
?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href = "?page=galeri";
</script>