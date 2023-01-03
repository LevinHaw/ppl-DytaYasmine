<?php
$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM tb_galeri WHERE id_galeri = '$id'");
$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Galeri </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Judul Galeri </label>
                        <input class="form-control" name="judul" value="<?php echo $data['judul_galeri']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Foto </label>
                        <input class="form-control" name="foto" value="<?php echo $data['foto']; ?>" />
                    </div>
                    <div class="col-md-12 bg-light text-right">
                        <a href="?page=galeri&aksi=cancel" class="btn btn-danger"> Kembali </a>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
if (isset($_POST['simpan'])) {

    $sql = $connect->query("UPDATE tb_galeri SET judul_galeri = '$_POST[judul]', foto = '$_POST[foto]' WHERE id_galeri = '$id'");

    if ($sql) {
?>
<script type="text/javascript">
    alert("Data Berhasil Diubah");
    window.location.href = "?page=galeri";
</script>
<?php
    }
}
?>