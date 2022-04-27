<?php
$tukhoa = $_GET['search'];

?>
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span><?php echo $tukhoa ?></span></li>
            
        </ul>
    </div>
</div>
<div class="main-content--section pbottom--30">
    <div class="container">

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        <div class="col-md-12 ptop--30 pbottom--30">
                           
                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <?php 
                                    $tin = TimKiem($tukhoa);
                                    while ($row_tin = mysqli_fetch_array($tin)) {
                                        ?>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="post--img">
                                                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>" class="thumb"><img src="upload/tintuc/<?php echo $row_tin['urlHinh'] ?>" alt=""></a>
                                                        <a href="#" class="cat"></a>
                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#"><?php echo $row_tin['Ngay'] ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>" class="btn-link"><?php echo $row_tin['TieuDe'] ?></a></h3>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p><?php echo $row_tin['TomTat'] ?></p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>">Continue Reading...</a>
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
                      
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <?php require "blocks/sidebar_bottom.php";  ?>
        </div>
    </div>
</div>