<?php
ob_start();
session_start();
if(!isset($_SESSION['idUser']) && $_SESSION['idGroup'] == 1){
    header('location: ../index.php');
}
require "../lib/db.php";
require "../lib/admin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <link href="./assets/css/style.css" rel="stylesheet">

    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
        function BrowseServer( startupPath, functionData ){
            var finder = new CKFinder();
            finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
            finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
            finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
            finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
            //finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
            finder.popup(); // Bật cửa sổ CKFinder
        } //BrowseServer

        function SetFileField( fileUrl, data ){
            document.getElementById( data["selectActionData"] ).value = fileUrl;
        }
        function ShowThumbnails( fileUrl, data ){	
            var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
            document.getElementById( 'thumbnails' ).innerHTML +=
            '<div class="thumb">' +
            '<img src="' + fileUrl + '" />' +
            '<div class="caption">' +
            '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
            '</div>' +
            '</div>';
            document.getElementById( 'preview' ).style.display = "";
            return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
        }
    </script>
    

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="./images/logo.png" alt="">
            <img class="logo-compact" src="./images/logo-text.png" alt="">
            <img class="brand-title" src="./images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
   
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                Xin chào: <?php echo $_SESSION['HoTen'] ?>
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="../logout.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
      
        <?php require "sidebar.php";  ?>
        
        <div class="content-body">
            <div class="container-fluid">
                <?php
                if (isset($_GET['page'])){
                    $page = $_GET['page'];
                }else {
                    $page = 'index';
                }
                if(file_exists('pages/'.$page.'.php')){
                include_once 'pages/'.$page.'.php';
                }
                        
            ?>

            </div>
        </div>
      
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
      


    </div>
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/global/global.min.js"></script>
    <script src="./assets/js/quixnav-init.js"></script>
    <script src="./assets/js/custom.min.js"></script>
    
    <script type="text/javascript" >
    $(document).ready(function(){
        $("#idTL").change(function(){ 
            var id = $(this).val();
            $.get("../loaitin.php", { idTL:id }, function(data){
                $("#idLT").html(data);
            });
        });
    });
</script>
</body>

</html>