    <?php 
    session_start();
    unset($_SESSION['sudah_login']);
    session_destroy();
    header("Location:../pages/Login-Risty.php");
    ?>