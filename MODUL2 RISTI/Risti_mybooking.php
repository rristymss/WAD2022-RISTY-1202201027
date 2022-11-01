    <?php 

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

        <center>
            <h3 class="mt-3">Thankyou Risti_1202201027 for Reserving</h3>
            <p class="mt-3">please double check your reservation details</p>
        </center>

        <section>
            <div class="container">
                <table class="table table-striped mt-3 ">
                    <thead>
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check-In</th>
                            <th scope="col">Check-Out</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service(s)</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo rand(1000000,9999999) ?></th>
                            <td><?php echo $_POST['name'] ?></td>
                            <td><?php echo $_POST['bookDate']." ". $_POST['startTime'] ?></td>
                            <td><?php echo date('Y-m-d', strtotime($_POST['bookDate'].  '+'. $_POST['duration'] .'days')) ." ".$_POST['startTime']; ?></td>
                            <td><?php echo $_POST['carType'] ?></td>
                            <td><?php echo $_POST['phone'] ?></td>
                            <td>
                                <?php
                                $servicePrice = 0;
                                if(isset($_POST['service'])){
                                    foreach($_POST['service'] as $service){
                                        echo "<ul><li>".$service.'</li></ul>';

                                        if($service=='Health Protocol'){
                                            $servicePrice = $servicePrice+25000;
                                        }
                                        if($service=='Driver'){
                                            $servicePrice = $servicePrice+100000;
                                        }
                                        if($service=='Fuel Filled'){
                                            $servicePrice = $servicePrice+250000;
                                        }
                                    }
                                }else{
                                    echo "No service";
                                }
                                ?>
                            </td>
                            <td>
                                <?php 
                                if($_POST['carType'] == 'Toyota Rush'){
                                    echo $price=200000*$_POST['duration'] +$servicePrice;
                                }
                                elseif($_POST['carType'] == 'Daihatsu Ayla'){
                                    echo $price=150000*$_POST['duration'] +$servicePrice;
                                }
                                elseif($_POST['carType'] == 'Honda Brio'){
                                    echo $price= 150000*$_POST['duration'] +$servicePrice;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
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