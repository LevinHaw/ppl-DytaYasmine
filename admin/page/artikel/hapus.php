<?php
$id = $_GET['id'];
$connect->query("DELETE FROM tb_artikel WHERE id_artikel ='$id'");
?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href = "?page=artikel";
</script>