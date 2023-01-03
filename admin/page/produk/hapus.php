<?php
$id = $_GET['id'];
$connect->query("DELETE FROM tb_produk WHERE id_produk ='$id'");
?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href = "?page=produk";
</script>