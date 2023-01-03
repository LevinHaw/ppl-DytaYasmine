<?php
error_reporting(0);
ob_start();

session_start();

include "page/koneksi.php";





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>DYTA Yasmin - Homepage</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg"
        style="background: linear-gradient(90deg, #DA3231 0%, #E1693B 52.77%, #E58440 92.13%);">
        <a class="navbar-brand mx-2 text-white" href="../Homepage">Homepage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <!-- Navbar -->

    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login Form</h2>
                <div class="card my-5">
                    <form class="card-body cardbody-color p-lg-5" method="POST" enctype="multipart/form-data"
                        style="background: linear-gradient(90deg, #DA3231 0%, #E1693B 52.77%, #E58440 92.13%);">
                        <div class="text-center">
                            <img src="../Assets/Logo.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="100px"
                                alt="profile" />
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                                placeholder="Username" name="username" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="password"
                                name="password" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-5 w-50" name="submit" href="index.php">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Footer -->
<footer class="footer text-center text-lg-start"
    style="background: linear-gradient(90deg, #DA3231 0%, #E1693B 52.77%, #E58440 92.13%);">
    <div class="text-center p-3">Copyright &copy; 2022 DYTA Yasmin</div>
</footer>

</html>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>

</html>

<?php
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        ?>
        <script type="text/javascript">
            alert("Username dan Password Anda Salah");
        </script>
    <?php
    }
}
?>