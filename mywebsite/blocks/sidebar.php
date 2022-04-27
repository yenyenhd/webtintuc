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
        <?php
        $binhchon = BinhChon();
        while($row_binhchon = mysqli_fetch_array($binhchon)) {
            $idBC = $row_binhchon['idBC'];
        ?>
        <div class="widget">
            <div class="widget--title" >
                <h2 class="h4">Bình chọn</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" >
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Poll Widget Start -->
            <div class="poll--widge">
                <ul class="nav">
                    <li class="title">
                        <h3 class="h4"><?php echo $row_binhchon['MoTa'] ?></h3>
                    </li>
                    
                    <li class="options">
                        <form action="" method="POST" >
                            <?php
                            $idBC = $row_binhchon['idBC'];
                            $sql = "SELECT * FROM phuongan where idBC = $idBC ";
                            $qr = mysqli_query($conn, $sql);
                            $i = 0;
                            while ($row = mysqli_fetch_array($qr)){
                            ?>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="<?php echo $row['idPA'] ?>" name="idPA" <?php if($i==0) {echo "checked='checked'"; $i++;} ?> />
                                    <span><?php echo $row['Mota']; ?></span>
                                    <input type="hidden" name="idBC" value="<?php echo $row_binhchon['idBC'] ?>">
                                </label>
                                
                            </div>

                                <?php } ?>

                            <button type="submit" class="btn btn-primary" name="btn-vote">Vote Now</button>
                        </form>
                    </li>
                    <li>
                        <table class="table" style="margin-top:20px" >
                        <?php
                            $s="SELECT sum(SoLanChon) as tongsolanchon from phuongan where idBC=$idBC";
                                $kq=mysqli_query($conn,$s);
                                if ($d=mysqli_fetch_array($kq))
                                {
                                    $tongsobinhchon=$d["tongsolanchon"];
                                }
                            ?>

                            <?php
                                
                                $sql="SELECT * from phuongan where idBC=$idBC";
                                $qr=mysqli_query($conn, $sql);
                                while($rs=mysqli_fetch_array($qr))
                                { $rong=($rs["SoLanChon"]/$tongsobinhchon)*150;
                                    $phantram=($rs["SoLanChon"]/$tongsobinhchon)*100;
                                ?>
                                <tr>
                                    <td width="150"><?php echo $rs["Mota"]; ?></td>
                                    <td width="150">
                                        <table width="150">
                                            <tr>
                                                <td width="<?php echo $rong; ?>" bgcolor="#FF0000"></td>
                                                <td style="padding-left:10px;"><?php echo round($phantram,2); ?>%</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="150">Số lần: <?php echo $rs["SoLanChon"]; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                                <tr>
                                    <td colspan="3" align="right">Tổng số lần chọn: <?php echo $tongsobinhchon; ?></td>
                                </tr>
                            </table>
                        </li>
                    
                </ul>
            </div>
            <!-- Poll Widget End -->
        </div>
        <!-- Widget End -->
        <?php } ?>
        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title" data-ajax="tab">
                <h2 class="h4">Phản hồi gần đây</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_readers_opinion_widget">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_readers_opinion_widget">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-2" data-ajax-content="outer">
                <!-- Post Items Start -->
                <div class="post--items post--items-3">
                    <ul class="nav" data-ajax-content="inner">
                        <?php   
                        $binhluan = BinhLuan();
                        while($row_binhluan = mysqli_fetch_array($binhluan)){
                        ?>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <span class="thumb"><img src="img/avatar.png" alt=""></span>

                                    <div class="post--info">
                                        <div class="title">
                                            <h3 class="h4"><?php echo $row_binhluan['NoiDung'] ?></h3>
                                        </div>

                                        <ul class="nav meta">
                                            <li><span>từ <?php echo $row_binhluan['HoTen'] ?></span></li>
                                            <li><span><?php echo $row_binhluan['Ngay'] ?></span></li>
                                        </ul>
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