<?php 
session_start();
require "lib/db.php";
require "lib/home.php";

?>
<?php 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $qr = "SELECT * FROM Users WHERE Username = '$username' AND Password = '$password'";
    $user = mysqli_query($conn, $qr);
    
    if(mysqli_num_rows($user) == 1){
        $row = mysqli_fetch_array($user);
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['HoTen'] = $row['HoTen'];
        $_SESSION['idGroup'] = $row['idGroup'];
        echo '<script type="text/javascript">';
        echo ' alert("Đăng nhập thành công.")'; 
        echo '</script>';
        if($_SESSION['idGroup'] == 1){
            header('Location: admin/index.php');
        }else{
            header('Location: index.php');
        }
        
        exit;
    }else{ 
        echo '<script type="text/javascript">';
        echo ' alert("Sai tên đăng nhập hoặc mật khẩu! Vui lòng nhập lại.")'; 
        echo '</script>';
      }

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php require "blocks/head.php";  ?>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Section Start -->
        <div class="login--section pd--100-0 bg--overlay" data-bg-img="img/login.jpg">
            <div class="container">
                <!-- Login Form Start -->
                <div class="login--form">
                    <div class="title">
                        <h1 class="h1">Đăng nhập</h1>
                    </div>
                    <form action="" data-form="validate" method="POST">
                        <div class="form-group">
                            <label>
                                <span>Username</span>
                                <input type="text" name="username" class="form-control" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Password</span>
                                <input type="password" name="password" class="form-control" required>
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="rememberme">
                                <span>Remember me</span>
                            </label>
                        </div>

                        <button type="submit" name="login" class="btn btn-lg btn-block btn-primary">Log in</button>

                        <p class="help-block clearfix">
                            <a href="#" class="btn-link pull-left">Forgot Username or Password?</a>
                            <a href="register.php" class="btn-link pull-right">Create An Account</a>
                        </p>
                    </form>

                    
                </div>
                <!-- Login Form End -->
            </div>
        </div>
        <!-- Login Section End -->
    </div>
    <!-- Wrapper End -->

    <?php require "blocks/script.php";  ?>
</body>
</html>
