    <?php 
    include("connector.php");

    $id = $_GET['id'];
    $query = "DELETE FROM showroom_risty_table WHERE id_mobil = id";
    $delete = mysqli_query($conn, $query);

    header("location:../pages/ListCar-Risty.php");
    ?>