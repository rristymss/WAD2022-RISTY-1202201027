    <?php 
    // include ("../config/connector.php");
    $servername = "localhost";
        $dbname = "wad_modul4_risti";
        $username = "root";
        $password = "";

        // Create connection
        session_start();
        $conn = new mysqli($servername, $username, $password, $dbname);
        
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = mysqli_query($conn, "SELECT * FROM user_risti WHERE email = '$email'");
        $cek = mysqli_num_rows($sql);

        if ($cek==1) {
            $_SESSION['status']="sudah_login";
            $result = mysqli_fetch_assoc($sql);
            echo $result['id'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];
            
            header("location:../index.php");
        }
        else {  
        ?>
            <div class="alert alert-danger mt-5">
            Gagal login
            </div>
        <?php
        }
    }
    ?>
    <!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Showroom Home</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            </head>
            <body>
            <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-white" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="./pages/ListCar-Risty.php">MyCar</a>
                        </li>
                    </ul>
                    </div>
                    <div class="d-flex">
                        <?php if($_SESSION != null){ ?>
                            <div class="dropdown">
                                <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['nama'] ?>
                                </button>
                                <ul class="dropdown-menu">  
                                    <li><a class="dropdown-item" href="#">profile</a></li>
                                    <li><a class="dropdown-item" href="../config/logout.php">logout</a></li>
                                </ul>
                            </div>
                            <a href="Add-Risty.php" class="btn btn-light text-primary">Add Car</a>
                        <?php } else{ ?>
                            <a href="../pages/Login-Risty.php" class="text-white">Login</a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                            <img src="../asset/image/blue.png" alt="" style="width:95%;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="row mt-5">
                                <div class="col-md-12 p-5">
                                    <div clas="d-flex justify-content-center align-items-center min-vh-100">
                                        <h3><b>Masuk</b></h3>
                                        <form method="POST" action="../config/login.php">
                                            <div class="mb-3 mt-5">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                                                <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                                            </div>
                                            <button class="btn btn-primary" type="submit" name="login">Masuk</button>
                                            <p class="pt-3">Belum memiliki akun? <a href="Register-Risty.php">Registrasi</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            </body>
        </html>
