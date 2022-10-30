<?php 
session_start();
if (isset($_GET['car'])){
    $car = $_GET['car'];
}
else {
    $car ='rush';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="container">
        <div class="row h-100">
            <div class="col-md-6 col-sm-12 my-auto">
                <img src=<?php echo "img/". $car .".jpg"?> width="600" alt="">
            </div>
            <div class="col-md-6 col-sm-12">
                <h4 class="mt-3">Rent Your Car Now</h4>
                <form action="Risti_mybooking.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" readonly value="Risti_1202201027">
                    </div>
                    <div class="mb-3">
                        <label for="bookDate" class="form-label">Book Date</label>
                        <input required type="date" class="form-control" name="bookDate">
                    </div>
                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time</label>
                        <input required type="time" class="form-control" name="startTime">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration(Days)</label>
                        <input required type="number" class="form-control" name="duration">
                    </div>
                    <div class="mb-3">
                        <label for="carType" class="form-label">Car Type</label>
                        <?php if($car == "rush"){?>
                            <select class="form-select" aria-label="Car Type" name="carType">
                                <option selected value="Toyota Rush">Toyota Rush</option>
                                <option value="Daihatsu Ayla">Daihatsu Ayla</option>
                                <option value="Honda Brio">Honda Brio</option>
                            </select>
                        <?php } ?>
                        <?php if($car == "ayla"){?>
                            <select class="form-select" aria-label="Car Type" name="carType">
                                <option value="Toyota Rush">Toyota Rush</option>
                                <option selected value="Daihatsu Ayla">Daihatsu Ayla</option>
                                <option value="Honda Brio">Honda Brio</option>
                            </select>
                        <?php } ?>
                        <?php if($car == "brio"){?>
                            <select class="form-select" aria-label="Car Type" name="carType">
                                <option value="Toyota Rush">Toyota Rush</option>
                                <option value="Daihatsu Ayla">Daihatsu Ayla</option>
                                <option selected value="Honda Brio">Honda Brio</option>
                            </select>
                        <?php } ?>

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Add Service(s)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Health Protocol" name="service[]">
                            <label class="form-check-label">
                                Health Protocol/Rp.25.000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Driver" name="service[]">
                            <label class="form-check-label">
                                Driver/Rp.100.000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fuel Filled" name="service[]">
                            <label class="form-check-label">
                                Fuel Filled/Rp.250.000
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center bg-light text-muted mt-3">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © Created By : Risti_1202201027
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>