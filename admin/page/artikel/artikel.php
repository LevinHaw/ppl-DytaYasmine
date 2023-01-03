<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Kelola Data Artikel </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div>
                        <a href="?page=artikel&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i
                                class="fa fa-plus"></i> Tambah Data Artikel </a>
                    </div><br>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Artikel</th>
                                <th>Deskripsi Artikel</th>
                                <th>Foto Artikel</th>
                                <th>link Artikel</th>
                                <th width="19%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include "../koneksi.php";
                            $nomor = 1;
                            $sql = $connect->query("SELECT * FROM tb_artikel");
                            while ($data = $sql->fetch_assoc()) {
                                ?>

                                <tr>
                                    <td>
                                        <?php echo $nomor++; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['judul_artikel'] ?>
                                    </td>
                                    <td>
                                        <?php echo $data['des_artikel'] ?>
                                    </td>
                                    <td>
                                        <?php echo "<img src='./assets_article/" . $data['foto'] . "' width='100px' height='100px'/>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['link'] ?>
                                    </td>
                                    <td>
                                        <a href="?page=artikel&aksi=ubah&id=<?php echo $data['id_artikel']; ?>"
                                            class="btn btn-warning"><i class="fa fa-edit"></i> Ubah </a>
                                        <a onclick="return confirm('Anda yakin ingin menghapus ?')"
                                            href="?page=artikel&aksi=hapus&id=<?php echo $data['id_artikel']; ?>"
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