<footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pd--30-0 bg--color-2">
                <div class="container">
                    <div class="row AdjustRow"> 
                        <?php 
                            $theloai = DanhSachTheLoai();
                            while ($row_theloai = mysqli_fetch_array($theloai)) {
                                $idTL = $row_theloai['idTL']; ?>
                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4"><?php echo $row_theloai['TenTL'] ?></h2>

                                    <i class="icon fa fa-expand"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                    <?php
                                    $loaitin = DanhSachLoaiTinTheoTL($idTL);
                                    while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                                        ?>
                                        <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT']?>" class="fa-angle-right"><?php echo $row_loaitin['Ten'] ?></a></li>
                                        <?php
                                    } ?>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <?php
                            } ?>

                       
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright bg--color-3">
                <div class="social--bg bg--color-1"></div>

                <div class="container">
                    <p class="text float--left">&copy; 2017 <a href="#">USNEWS</a>. All Rights Reserved.</p>

                    <ul class="nav social float--right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>

                    <ul class="nav links float--right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>