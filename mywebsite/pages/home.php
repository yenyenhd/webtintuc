<div class="main-content--section pbottom--30">
    <div class="container">
                <!-- Main Content Start -->
        <?php require "blocks/top_home.php";  ?>
        <div class="row">
        <!-- Main Content Start -->

            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        <!-- World News Start -->
                        <?php 
                            $theloai = DanhSachTheLoai_Home(1);
                            while($row_theloai = mysqli_fetch_array($theloai)){
                                $idTL = $row_theloai['idTL'];
                        ?>
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <a href="theloai/<?php echo $idTL ?>-<?php echo $row_theloai['TenTL_KhongDau'] ?>.html"><h2 class="h4"><?php echo $row_theloai['TenTL'] ?></h2></a>
                                <?php 
                                        $loaitin = DanhSachLoaiTinTheoTL($idTL);
                                        while($row_loaitin = mysqli_fetch_array($loaitin)){
                                            ?>
                                    <span style="padding: 0 2px"><a href="loaitin/1/<?php echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>.html" class="prev btn-link"><?php echo $row_loaitin['Ten'] ?> </a></span>
                                            <?php
                                        } ?>

                                
                            </div>
                            <!-- Post Items Title End -->
                            <?php  
                            $tintheoloai_mottin = TinTheoLoai_MotTin($idTL);
                            $row_tintheoloai = mysqli_fetch_array($tintheoloai_mottin);
                            ?>
                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="chitiet/<?php echo $row_tintheoloai['idTin'] ?>-<?php echo $row_tintheoloai['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_tintheoloai['urlHinh'] ?>" alt=""></a>
                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php echo $row_tintheoloai['Ngay'] ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="chitiet/<?php echo $row_tintheoloai['idTin'] ?>-<?php echo $row_tintheoloai['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tintheoloai['TieuDe'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <?php 
                                        $bontin= TinTheoLoai_BonTin($idTL);
                                        while ($row_bontin = mysqli_fetch_array($bontin)) {
                                            ?>
                                    <li class="col-xs-6">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="chitiet/<?php echo $row_bontin['idTin'] ?>-<?php echo $row_bontin['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_bontin['urlHinh'] ?>" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php echo $row_bontin['Ngay'] ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="chitiet/<?php echo $row_bontin['idTin'] ?>-<?php echo $row_bontin['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_bontin['TieuDe'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php
                                        } ?>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <?php } ?>
                        <!-- World News End -->

                        
                    </div>
                </div>
            </div>
        <!-- Main Content End -->        
            <?php require "blocks/sidebar_top.php";  ?>             
        </div>

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                    <?php 
                    $theloai = DanhSachTheLoai_Home(2);
                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                        $idTL = $row_theloai['idTL']; ?>
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <a href="theloai/<?php echo $idTL ?>-<?php echo $row_theloai['TenTL_KhongDau'] ?>.html"><h2 class="h4"><?php echo $row_theloai['TenTL'] ?></h2></a>
                                <?php
                                        $loaitin = DanhSachLoaiTinTheoTL($idTL);
                        while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                            ?>
                                    <span style="padding: 0 2px"><a href="loaitin/1/<?php echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>.html" class="prev btn-link"><?php echo $row_loaitin['Ten'] ?> </a></span>
                                            <?php
                        } ?>    
                            </div>
                        
                            <?php  
                                $tintheoloai_mottin = TinTheoLoai_MotTin($idTL);
                                $row_tintheoloai = mysqli_fetch_array($tintheoloai_mottin);
                            ?>
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="chitiet/<?php echo $row_tintheoloai['idTin'] ?>-<?php echo $row_tintheoloai['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_tintheoloai['urlHinh'] ?>" alt=""></a>

                                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php echo $row_tintheoloai['Ngay'] ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="chitiet/<?php echo $row_tintheoloai['idTin'] ?>-<?php echo $row_tintheoloai['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tintheoloai['TieuDe'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php 
                                        $bontin= TinTheoLoai_BonTin($idTL);
                                        while ($row_bontin = mysqli_fetch_array($bontin)) {
                                            ?>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="chitiet/<?php echo $row_bontin['idTin'] ?>-<?php echo $row_bontin['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_bontin['urlHinh'] ?>" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        
                                                        <li><a href="#"><?php echo $row_bontin['Ngay'] ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="chitiet/<?php echo $row_bontin['idTin'] ?>-<?php echo $row_bontin['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_bontin['TieuDe'] ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
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
                        
                        </div>
                    <?php
                    } ?>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <?php require "blocks/sidebar_bottom.php";  ?>
        
        </div>
    </div>
</div>