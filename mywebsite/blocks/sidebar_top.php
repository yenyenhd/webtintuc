<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Stay Connected</h2>
                <i class="icon fa fa-share-alt"></i>
            </div>

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
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Tin nổi bật</h2>
                <i class="icon fa fa-newspaper-o"></i>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1">
                <!-- Post Items Start -->
                <div class="post--items post--items-3" data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                        <?php 
                        $tinnoibat = TinNoiBat();
                        while($row_tinnoibat = mysqli_fetch_array($tinnoibat)){
                        ?>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="" class="thumb"><img src="admin/uploads/<?php echo $row_tinnoibat['urlHinh'] ?>" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#"><?php echo $row_tinnoibat['Ngay'] ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="chitiet/<?php echo $row_tinnoibat['idTin'] ?>-<?php echo $row_tinnoibat['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tinnoibat['TieuDe'] ?></a></h3>
                                        </div>
                                    </div>
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
            <!-- List Widgets End -->
        </div>
        <!-- Widget End -->
        
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Tin xem nhiều</h2>
                <i class="icon fa fa-newspaper-o"></i>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1">
                <!-- Post Items Start -->
                <div class="post--items post--items-3" data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                        <?php 
                        $xemnhieu = XemNhieu();
                        while($row_xemnhieu = mysqli_fetch_array($xemnhieu)){
                        ?>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="" class="thumb"><img src="admin/uploads/<?php echo $row_xemnhieu['urlHinh'] ?>" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#"><?php echo $row_xemnhieu['Ngay'] ?></a></li>
                                            <li><a href="#"><?php echo $row_xemnhieu['SoLanXem'] ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="chitiet/<?php echo $row_xemnhieu['idTin'] ?>-<?php echo $row_xemnhieu['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_xemnhieu['TieuDe'] ?></a></h3>
                                        </div>
                                    </div>
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
            <!-- List Widgets End -->
        </div>
    </div>
</div>