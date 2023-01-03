<?php
$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM tb_admin WHERE id = '$id'");
$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Pengguna </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> ID User </label>
                        <input class="form-control" name="id" value="<?php echo $data['id']; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label> Username </label>
                        <input class="form-control" name="user" value="<?php echo $data['username']; ?>" />
                    </div>
                    <div class="form-group">
                        <label> Password </label>
                        <input class="form-control" name="pass" type="Password"
                            value="<?php echo $data['password']; ?>" />
                    </div>
                    <div class="col-md-12 bg-light text-right">
                        <a href="?page=pengguna&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

    $sql = $connect->query("UPDATE tb_admin SET 
        id = '$_POST[id]', username = '$_POST[user]', password = '$_POST[pass]' WHERE id = '$id'");

    if ($sql) {
?>
<script type="text/javascript">
    alert("Data Berhasil Diubah");
    window.location.href = "?page=pengguna";
</script>
<?php
    }
}
?>