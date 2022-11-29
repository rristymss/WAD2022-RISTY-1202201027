    <?php 
    session_start();
    
    if(!isset($_SESSION['id'])){
        header("Location:../pages/Register-Risty.php");
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
                    <a class="nav-link text-white" href="">Home</a>
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
                                <li><a class="dropdown-item" href="pages/Profile-Risty.php">profile</a></li>
                                <li><a class="dropdown-item" href="config/logout.php">logout</a></li>
                            </ul>
                        </div>
                        <a href="../MODUL4 RISTI/pages/Add-Risty.php" class="btn btn-light text-primary">Add Car</a>
                    <?php } else{ ?>
                        <a href="../MODUL4 RISTI/pages/Login-Risty.php" class="text-white">Login</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                        <div class="row">
                            <div class="col-md-12">
                                <h1><b>Selamat Datang di Showroom Risty</b></h1>
                                
                            </div>
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex voluptates nobis quod perferendis porro facilis vero rem tenetur ut incidunt, harum rerum quia? Sint, minus veritatis. Quasi perferendis velit quis.</p>
                            </div>
                            <div class="col-md-12 mt-3">
                                <a href="./pages/ListCar-Risty.php" class="btn btn-primary">My Car</a>
                            </div>
                            <div class="col-md-12 mt-3 pt-4">
                                <img src="asset/image/logo-ead.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="asset/image/mclaren.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
    </html>
