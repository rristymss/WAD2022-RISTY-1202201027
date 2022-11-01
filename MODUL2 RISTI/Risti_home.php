    <?php 
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservasi Kendaraan EAD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Risti_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Risti_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <center>
                <h3 class="mt-3">WELCOME TO EAD RENT</h3>
                <p class="mt-3">Find your best deal, here!</p>
            </center>
        </section>

        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card" style="width: 16rem;">
                            <img src="img/rush.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Toyota Rush</b></h5>
                                <p class="card-text">Rp.200.000/day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary"><center><b>7 kursi</b></center></li>
                                <li class="list-group-item text-primary"><center><b>1500 cc</b></center></li>
                                <li class="list-group-item text-primary"><center><b>Manual</b></center></li>
                            </ul>
                            <div class="card-body">
                                <center><a href="Risti_booking.php?car=rush" class="btn btn-primary">Book Now</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img src="img/ayla.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Daihatsu Ayla</b></h5>
                                <p class="card-text">Rp.150.000/day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary"><center><b>5 kursi</b></center></li>
                                <li class="list-group-item text-primary"><center><b>1200 cc</b></center></li>
                                <li class="list-group-item text-primary"><center><b>Manual</b></center></li>
                            </ul>
                            <div class="card-body">
                                <center><a href="Risti_booking.php?car=ayla" class="btn btn-primary">Book Now</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img src="img/brio.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Honda Brio</b></h5>
                                <p class="card-text">Rp.150.000/day</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary"><center><b>5 kursi</b></center></li>
                                <li class="list-group-item text-primary"><center><b>1200 cc</b></center></li>
                                <li class="list-group-item text-primary"><center><b>Automatic</b></center></li>
                            </ul>
                            <div class="card-body">
                                <center><a href="Risti_booking.php?car=brio" class="btn btn-primary">Book Now</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-center bg-light text-muted mt-3">
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © Created By : Risti_1202201027
            </div>
            <!-- Copyright -->
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>