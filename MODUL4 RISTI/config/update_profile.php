    <?php 
        include ("connector.php");

        $id = $_POST['id'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];
        if($password1 == null){
            if (!mysqli_query($conn, "UPDATE user_risti SET nama='$name', no_hp='$phone' WHERE id='$id'")){
                echo ("Error description: " . mysqli_error($conn));
            }
        }
        else{
            if($password1 == $password2){
                if (!mysqli_query($conn, "UPDATE user_risti SET nama='$name', password='$password2', no_hp='$phone' WHERE id='$id'")){
                    echo ("Error description: " . mysqli_error($conn));
                }
            }
        }
        header("location:../pages/Profile-Risty.php");

        ?>