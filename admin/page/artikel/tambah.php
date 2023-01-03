<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Artikel </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Judul Artikel </label>
                        <input class="form-control" name="judul" id="artikel" />
                    </div>
                    <div class="form-group">
                        <label> Deskripsi Artikel </label>
                        <input class="form-control" name="deskripsi" id="artikel" />
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" required="" />
                    </div>
                    <div class="form-group">
                        <label> Link Artikel </label>
                        <input class="form-control" name="link" />
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
    $FotoArtikel = $_FILES['foto']['name'];

    $sql = "INSERT INTO tb_artikel (judul_Artikel, des_artikel, foto, link)
        VALUES ('$_POST[judul]', '$_POST[deskripsi]', '$FotoArtikel', '$_POST[link]')";

    mysqli_query($connect, $sql);
    // Simpan di Folder Gambar
    echo $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "./assets_article/" . $_FILES['foto']['name']);



    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=artikel";
        </script>
    <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan");
            window.location.href = "?page=artikel&aksi=tambah";
        </script>
    <?php
    }
}
?>