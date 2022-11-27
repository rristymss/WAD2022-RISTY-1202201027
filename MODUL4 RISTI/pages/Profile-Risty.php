<?php 
session_start();

        include ("../config/connector.php");
        $uid = $_SESSION['id'];
        $query = "SELECT * FROM user_risti WHERE id='$uid'";
        $show = mysqli_query($conn, $query);
        $row = mysqli_num_rows($show);
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
                    <a class="nav-link text-white" href="../pages/ListCar-Risty.php">MyCar</a>
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
                <div class="col-md-12 mt-5">
                    <div class="container mt-5">
                        <form method="POST" action="../config/update_profile.php">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>"/>
                        <?php while($data = mysqli_fetch_array($show)) { ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label><br>
                            <span><?php echo $data['email'] ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?= $data['nama']?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="<?= $data['no_hp']?>">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ulangi Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Warna Navbar</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Biru</option>
                                <option value="2">Putih</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <?php } ?>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
    </html>
