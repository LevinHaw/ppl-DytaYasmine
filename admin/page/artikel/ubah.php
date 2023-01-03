<?php
$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM tb_artikel WHERE id_artikel = '$id'");
$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Artikel </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Judul Artikel </label>
                        <input class="form-control" name="judul" value="<?php echo $data['judul_artikel']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Deskripsi Artikel </label>
                        <input class="form-control" name="deskripsi" value="<?php echo $data['des_artikel']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Link </label>
                        <input class="form-control" name="link" value="<?php echo $data['link']; ?>" />
                    </div>
                    <div class="col-md-12 bg-light text-right">
                        <a href="?page=artikel&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

    $sql = $connect->query("UPDATE tb_artikel SET 
        judul_artikel = '$_POST[judul]', des_artikel = '$_POST[deskripsi]', link = '$_POST[link]' WHERE id_artikel = '$id'");

    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Diubah");
            window.location.href = "?page=artikel";
        </script>
    <?php
    }
}
?>