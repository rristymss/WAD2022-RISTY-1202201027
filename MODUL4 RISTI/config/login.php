    <?php 
    include ("connector.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailCheck = "SELECT * FROM user_risti WHERE email = '$email'";
    $check = mysqli_query($conn, $emailCheck);
    session_start();
    if(mysqli_num_rows($check)==1){
        $result = mysqli_fetch_assoc($check);

        if($password == $result['password']){
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            $_SESSION['message'] = 'Berhasil Login';
            header("location: ../pages/Home-Risty.php");
        } else {
            echo("<script>
            alert('Password Tidak Cocok');
            window.location.href='../pages/Login-Risty.php';
            </script>");
        }
        
    }
    else{
        echo("error");
    }

    ?>