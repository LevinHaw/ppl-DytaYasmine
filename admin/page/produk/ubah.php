<?php
$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM tb_produk WHERE id_produk = '$id'");
$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Produk </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Nama </label>
                        <input class="form-control" name="nama" value="<?php echo $data['nama_produk']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Harga </label>
                        <input class="form-control" name="harga" value="<?php echo $data['harga_produk']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Deskripsi </label>
                        <input class="form-control" name="deskripsi" value="<?php echo $data['des_produk']; ?>" />
                    </div>
                    <div class="col-md-12 bg-light text-right">
                        <a href="?page=produk&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

    $sql = $connect->query("UPDATE tb_produk SET 
        nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', des_produk = '$_POST[deskripsi]' WHERE id_produk = '$id'");

    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Diubah");
            window.location.href = "?page=produk";
        </script>
    <?php
    }
}
?>