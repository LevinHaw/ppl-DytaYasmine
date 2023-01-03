<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Kelola Data Produk </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div>
                        <a href="?page=produk&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i
                                class="fa fa-plus"></i> Tambah Data Produk </a>
                    </div><br>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th width="19%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $nomor = 1;
                            $sql = $connect->query("SELECT * FROM tb_produk");
                            while ($data = $sql->fetch_assoc()) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $nomor++; ?>
                                </td>
                                <td>
                                    <?php echo "<img src='./assets_produk/" . $data['foto_produk'] . "' width='100px' height='100px'/>"; ?>
                                </td>
                                <td>
                                    <?php echo $data['nama_produk']; ?>
                                </td>
                                <td>
                                    <?php echo $data['harga_produk']; ?>
                                </td>
                                <td>
                                    <?php echo $data['des_produk']; ?>
                                </td>
                                <td>
                                    <a href="?page=produk&aksi=ubah&id=<?php echo $data['id_produk']; ?>"
                                        class="btn btn-warning"><i class="fa fa-edit"></i> Ubah </a>
                                    <a onclick="return confirm('Anda yakin ingin menghapus ?')"
                                        href="?page=produk&aksi=hapus&id=<?php echo $data['id_produk']; ?>"
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