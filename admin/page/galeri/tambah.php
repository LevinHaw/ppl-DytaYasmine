<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Galeri </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Judul Galeri </label>
                        <input class="form-control" name="judul" />
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" required="" />
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
    $fileName = $_FILES['foto']['name'];
    // Simpan ke Database
    $sql = "insert into tb_galeri (foto, judul_galeri) values ('$fileName','" . $_POST['judul'] . "')";
    mysqli_query($connect, $sql);
    // Simpan di Folder Gambar
    echo $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "./gambar/" . $_FILES['foto']['name']);

    if ($sql) {

?>
<script type="text/javascript">
    alert("Data Berhasil Disimpan");
    window.location.href = "?page=galeri";
</script>
<?php
    }
}
?>