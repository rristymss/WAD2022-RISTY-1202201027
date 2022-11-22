    <?php 
    include ("connector.php");

    $id = $_POST['id'];
    $carName = $_POST['carName'];
    $owner = $_POST['owner'];
    $merk = $_POST['merk'];
    $date = $_POST['date'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];

    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['img']['name'];
    $ukuran = $_FILES['img']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $path = $id.'_'.$filename;
    move_uploaded_file($_FILES['img']['tmp_name'],'../asset/image/'.$path);

    if($filename==null){
        $query = "UPDATE showroom_risty_table SET nama_mobil='$carName', pemilik_mobil='$owner', merk_mobil='$merk', tanggal_beli='$date', deskripsi='$desc', status_pembayaran='$status' WHERE id_mobil='$id'";
    }
    else{
        $query = "UPDATE showroom_risty_table SET nama_mobil='$carName', pemilik_mobil='$owner', merk_mobil='$merk', tanggal_beli='$date', deskripsi='$desc', foto_mobil='$path', status_pembayaran='$status' WHERE id_mobil='$id'";
    }
    if (!mysqli_query($conn, $query)){
        echo ("Error description: " . mysqli_error($conn));
    }

    header("location:../pages/ListCar-Risty.php");

    ?>