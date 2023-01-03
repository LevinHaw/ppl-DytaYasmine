<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Produk </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Foto </label>
                        <input name="foto_produk" type="file" required="" />
                    </div>
                    <div class="form-group">
                        <label> Nama </label>
                        <input class="form-control" name="nama" />
                    </div>
                    <div class="form-group">
                        <label> Harga </label>
                        <input class="form-control" name="harga" />
                    </div>
                    <div class="form-group">
                        <label> Deskripsi </label>
                        <input class="form-control" name="deskripsi" />
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
    $ProdukPhoto = $_FILES['foto_produk']['name'];

    $sql = "INSERT INTO tb_produk (nama_produk, harga_produk, foto_produk, des_produk)
        VALUES ('$_POST[nama]', '$_POST[harga]', '$ProdukPhoto', '$_POST[deskripsi]')";

    mysqli_query($connect, $sql);
    // Simpan di Folder Gambar
    echo $_FILES['foto_produk']['name'];
    move_uploaded_file($_FILES['foto_produk']['tmp_name'], "./assets_produk/" . $_FILES['foto_produk']['name']);

    if ($sql) {
?>
<script type="text/javascript">
    alert("Data Berhasil Disimpan");
    window.location.href = "?page=produk";
</script>
<?php
    }
}
?>