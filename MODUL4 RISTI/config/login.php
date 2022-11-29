    <?php 
    include ("connector.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailCheck = "SELECT * FROM user_risti WHERE email = '$email'";
    $check = mysqli_query($conn, $emailCheck);
    echo(mysqli_num_rows($check));
    echo($check);

    if(mysqli_num_rows($check)==1){
        $result = mysqli_fetch_assoc($check);
        

        if(password_verify($password,$result['password'])){
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            $_SESSION['message'] = 'Berhasil Login';

        }
        echo($result);
        header("location:index.php");
    }
    else{
        echo("error");
    }

    ?>