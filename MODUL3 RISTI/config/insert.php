<?php 
include ("connector.php");

$id = rand();
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

if (!mysqli_query($conn, "INSERT INTO showroom_risty_table VALUES ('$id','$carName','$owner','$merk','$date','$desc','$path','$status')")){
    echo ("Error description: " . mysqli_error($conn));
}

header("location:../pages/ListCar-Risty.php");

?>