<?php session_start() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Item</title>
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

        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 mt-5"></div>
                <h2><b>Tambah Mobil</b></h2>
                <div class="col-md-12">
                    <p>Tambah Mobil Baru Anda </p>
                </div>
            </div>
            <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="carName" placeholder="BMW-i4">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="owner" placeholder="Risti-1202201027">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="merk" placeholder="BMW">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="formFile" name="img">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Status Pembayaran</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas">
                                <label class="form-check-label" for="inlineRadio1">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum Lunas">
                                <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Selesai</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>