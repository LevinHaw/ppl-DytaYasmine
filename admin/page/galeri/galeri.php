<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Kelola Data Galeri </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div>
                        <a href="?page=galeri&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i
                                class="fa fa-plus"></i> Tambah Data Galeri</a>
                    </div><br>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Galeri</th>
                                <th>Foto</th>
                                <th width="19%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include "../koneksi.php";


                            $nomor = 1;
                            $sql = $connect->query("SELECT * FROM tb_galeri");
                            while ($data = $sql->fetch_assoc()) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $nomor++; ?>
                                </td>
                                <td>
                                    <?php echo $data['judul_galeri']; ?>
                                </td>
                                <td>
                                    <?php echo "<img src='./gambar/" . $data['foto'] . "' width='100px' height='100px'/>"; ?>
                                </td>
                                <td>
                                    <a href="?page=galeri&aksi=ubah&id=<?php echo $data['id_galeri']; ?>"
                                        class="btn btn-warning"><i class="fa fa-edit"></i> Ubah </a>
                                    <a onclick="return confirm('Anda yakin ingin menghapus ?')"
                                        href="?page=galeri&aksi=hapus&id=<?php echo $data['id_galeri']; ?>"
                                        class="btn btn-danger"><i class="fa fa-trash"></i> Hapus </a>
                                </td>
                            </tr>
                            <?php } ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>