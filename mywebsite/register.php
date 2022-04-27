<?php 
session_start();
require "lib/db.php";
require "lib/home.php";

?>
<?php 
if(isset($_POST['register'])){
    $HoTen = $_POST['HoTen'];
    $Username = $_POST['username'];
    $Password = md5($_POST['password']);
    $DiaChi = $_POST['DiaChi'];
    $Dienthoai = $_POST['Dienthoai'];
    $Email = $_POST['email'];
    $idGroup = 0;
    $NgaySinh = $_POST['NgaySinh'];
    $GioiTinh = $_POST['GioiTinh'];

    $qr = "INSERT INTO users VALUE(null, '$HoTen', '$Username', '$Password', '$DiaChi', '$Dienthoai', '$Email','$idGroup',
     '$NgaySinh', '$GioiTinh')";
    mysqli_query($conn, $qr);
    header('location: login.php');

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
                        <h1 class="h1">Đăng ký</h1>
                    </div>

                    <form action="" data-form="validate" method="POST">
                        <div class="form-group">
                            <label>
                                <span>Họ tên</span>
                                <input type="text" name="HoTen" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Username</span>
                                <input type="text"  class="form-control" required name="username">
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Password</span>
                                <input type="password" name="password" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Địa chỉ</span>
                                <input type="text" name="DiaChi" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Số điện thoại</span>
                                <input type="number" name="Dienthoai" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Email</span>
                                <input type="email" name="email" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Ngày sinh</span>
                                <input type="text" name="NgaySinh" class="form-control" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span>Giới tính</span>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="GioiTinh" value="0">
                                        <span>Nữ</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="GioiTinh" value="1">
                                        <span>Nam</span>
                                    </label>
                                </div>
                            </label>
                        </div>
                       
                        <button type="submit" name="register" class="btn btn-lg btn-block btn-primary">Đăng ký</button>

                        <p class="help-block clearfix">
                            <a href="login.php" class="btn-link pull-right">Đăng nhập</a>
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
