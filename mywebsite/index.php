<?php 
session_start();
require "lib/db.php";
require "lib/home.php";

if(isset($_GET["p"])) 
    $p = $_GET['p'];
else 
    $p = "";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php require "blocks/head.php";  ?>
<body class="boxed" data-bg-img="img/bg-pattern.png">

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">

        <?php require "blocks/header.php";  ?>
        
    
        <?php require "blocks/news_ticker.php";  ?>
        
        <?php
            switch($p){
                case "theloaitin" : require "pages/theloaitin.php";
                break;
                case "tintrongloai" : require "pages/tintrongloai.php";
                break;
                case "chitiettin" : require "pages/chitiettin.php";
                break;
                case "timkiem" : require "pages/timkiem.php";
                break;
                default : require "pages/home.php";
            }
        ?>
    
        <?php require "blocks/footer.php";  ?>
    </div>
    <!-- Wrapper End -->

    <!-- Sticky Social Start -->
    <?php require "blocks/social.php";  ?>
    
   
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <?php require "blocks/script.php";  ?>
    

</body>
</html>
