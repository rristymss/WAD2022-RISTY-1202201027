<?php 
    include ("../config/connector.php");
    $id=$_GET['id'];
    $query = "SELECT * FROM showroom_risty_table WHERE id_mobil=$id";
    $show = mysqli_query($conn, $query);
    $row = mysqli_num_rows($show);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
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
        </div>
    </nav>
    <div class="container">
        <?php while($data = mysqli_fetch_array($show)) { ?>
        <div class="row pt-5">
            <div class="col-md-12 mt-3">
                <h3><b><?php echo($data['nama_mobil']) ?></b></h3>
                <p>Detail Mobil <?php echo($data['nama_mobil']) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="../asset/image/<?php echo($data['foto_mobil']) ?>" width="100%" alt="">
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="carName" disabled value="<?=$data['nama_mobil']?>"> 
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="owner" disabled value="<?=$data['pemilik_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="merk" disabled value="<?=$data['merk_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="date" disabled value="<?=$data['tanggal_beli']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" disabled rows="3"><?=$data['deskripsi']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="img" disabled value="<?=$data['foto_mobil']?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Status Pembayaran</label><br>
                    <?php if($data['status_pembayaran']=="Lunas") {?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" disabled checked>
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum Lunas" disabled>
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                    </div>
                    <?php } else{?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" disabled>
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum Lunas" disabled checked>
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                    </div>
                    <?php } ?>
                    <div class="mt-3">
                        <a href="Edit-Risty.php?id=<?=$data['id_mobil']?>" class="a btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>