<?php
if(isset($_GET['idTin'])) {
    $idTin = $_GET['idTin'];
    $idTin = (int)$idTin;
}else {
    $idTin = 1;
}
$tin = ChiTietTin($idTin);
$row_tin = mysqli_fetch_array($tin);
?>
<?php
$bc = breadCrumb_chitiettin($idTin);
$row_bc = mysqli_fetch_array($bc);

CapNhatSoLanXem($idTin);
 ?>
<div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.php" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                    <li><a href="index.php?p=theloaitin&idTL=<?php echo $row_bc['idTL'] ?>" class="btn-link"><?php echo $row_bc['TenTL'] ?></a></li>
                    <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_bc['idLT'] ?>" class="btn-link"><?php echo $row_bc['Ten'] ?></a></li>
                    <li class="active"><span><?php echo $row_tin['TieuDe'] ?></span></li>
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->
        
        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Post Item Start -->
                            <div class="post--item post--single post--title-largest pd--30-0">

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo $row_tin['Ngay'] ?></a></li>
                                        <li><span><i class="fa fm fa-eye"></i><?php echo $row_tin['SoLanXem']?></span></li>
                                        <li><a href="#"><i class="fa fm fa-comments-o"></i>02</a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><?php echo $row_tin['TieuDe'] ?></h2>
                                    </div>
                                </div>

                                <div class="post--content">
                                    <p><?php echo $row_tin['Content'] ?></p>
                                  
                                </div>
                            </div>
                            <!-- Post Item End -->
                    
                            

                            <!-- Post Social Start -->
                            <div class="post--social pbottom--30">
                                <span class="title"><i class="fa fa-share-alt"></i></span>
                                
                                <!-- Social Widget Start -->
                                <div class="social--widget style--4">
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Social Widget End -->
                            </div>
                            <!-- Post Social End -->


                            <!-- Post Related Start -->
                            <div class="post--related ptop--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Có thể bạn cũng thích</h2>

                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <?php
                                        $tincungloai = TinCungLoai($idTin, $row_tin['idLT']);
                                        while($row_tincungloai = mysqli_fetch_array($tincungloai)){
                                        ?>
                                        <li class="col-sm-6 pbottom--30">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="#" class="thumb"><img src="admin/uploads/<?php echo $row_tincungloai['urlHinh'] ?>" alt=""></a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#"><?php echo $row_tincungloai['Ngay'] ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="chitiet/<?php echo $row_tincungloai['idTin'] ?>-<?php echo $row_tincungloai['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tincungloai['TieuDe'] ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p><?php echo $row_tincungloai['TomTat'] ?></p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="chitiet/<?php echo $row_tincungloai['idTin'] ?>-<?php echo $row_tincungloai['TieuDe_KhongDau'] ?>.html">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php } ?>
                                        
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Post Related End -->

                            <!-- Comment List Start -->
                            <div class="comment--list pd--30-0">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title">
                                    <?php 
                                    $socomment = SoComment($idTin);

                                    ?>
                                    <h2 class="h4">Có <?php echo $socomment['tongsocomment'] ?> bình luận</h2>

                                    <i class="icon fa fa-comments-o"></i>
                                </div>
                                <!-- Post Items Title End -->

                                <ul class="comment--items nav">
                                    <?php 
                                    $comment = Comment($idTin);
                                    while($row_comment = mysqli_fetch_array($comment)){
                                    ?>
                                    <li>
                                        <!-- Comment Item Start -->
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left">
                                                <img src="img/avatar.png" alt="">
                                            </div>

                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name"><?php echo $row_comment['HoTen'] ?></p>
                                                    <p class="date"><?php echo $row_comment['Ngay'] ?></p>

                                                    <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>

                                                <div class="comment--content">
                                                    <p><?php echo $row_comment['NoiDung'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment Item End -->
                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <!-- Comment List End -->

                            <?php
                                if(isset($_POST['comment'])){
                                    $idUser = $_SESSION['idUser'];
                                    $idTin = $idTin;
                                    $NoiDung = $_POST['NoiDung'];
                                    $Ngay = date("Y-m-d H:i:s");
                                    
                                    $qr = "INSERT INTO comment VALUE(null, '$idUser', '$idTin', '$NoiDung','$Ngay' )";
                                    mysqli_query($conn, $qr);
                                    
                                }

                                ?>
                            <?php 
                            if(isset($_SESSION['idUser'])){
                            ?>
                            <div class="comment--form pd--30-0">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title">
                                    <h2 class="h4">Để lại bình luận</h2>

                                    <i class="icon fa fa-pencil-square-o"></i>
                                </div>
                                <!-- Post Items Title End -->

                                <div class="comment-respond">
                                    <form action="" data-form="validate" method="POST">
                                
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>
                                                    <span>Comment *</span>
                                                    <textarea name="NoiDung" class="form-control" required></textarea>
                                                </label>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="comment">Gửi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php } else{ ?>
                            <p>Vui lòng đăng nhập để có thể bình luận <a href="login.php">Đăng nhập</a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <?php require "blocks/sidebar.php";  ?>
                </div>
            </div>
        </div>