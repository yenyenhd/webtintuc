<?php 
    $idTL = $_GET['idTL'];
    $idTL = (int)$idTL;
   
?>

<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span><?php echo TenTheLoai($idTL) ?></span></li>
        </ul>
    </div>
</div>
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
        <?php require "blocks/top_theloaitin.php";  ?>
        <!-- Main Content End -->

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                    <?php 
                    $loaitin = DanhSachLoaiTinTheoTL($idTL);
                    while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                        $idLT = $row_loaitin['idLT']; ?>
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <a href="loaitin/1/<?php echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>.html"><h2 class="h4"><?php echo $row_loaitin['Ten'] ?></h2></a>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_automobile_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_automobile_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <?php
                                    $batin = TinTheoLoaiBaTin($idLT);
                                    while($row_batin = mysqli_fetch_array($batin)){
                                    ?>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="post--img">
                                                        <a href="chitiet/<?php echo $row_batin['idTin'] ?>-<?php echo $row_batin['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_batin['urlHinh'] ?>" alt=""></a>
                                                        <a href="#" class="cat"><?php echo $row_loaitin['Ten'] ?></a>
                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                        
                                                            <li><a href="#"><?php echo $row_batin['Ngay'] ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="chitiet/<?php echo $row_batin['idTin'] ?>-<?php echo $row_batin['TieuDe_KhongDau'] ?>.html" class="btn-link"> <?php echo $row_batin['TieuDe'] ?></a></h3>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p><?php echo $row_batin['TomTat'] ?></p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_batin['idTin'] ?>">Continue Reading...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>

                                    <li>
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <?php
                    } ?>
                                   
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                    <?php 
                    } ?>

                       
                    </div>
                </div>
            </div>
          
            <?php require "blocks/sidebar.php";  ?>

           
           
        </div>
    </div>
</div>