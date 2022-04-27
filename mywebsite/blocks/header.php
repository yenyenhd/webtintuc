
<header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-2">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <!-- Header Topbar Info Start -->
                        <ul class="header--topbar-info nav">
                            <li><i class="fa fm fa-map-marker"></i>Hà Nội</li>
                            <li><i class="fa fm fa-mixcloud"></i>30<sup>0</sup> C</li>
                            <li><i class="fa fm fa-calendar"></i>Ngày <?php echo date("d/m/Y")  ?></li>
                        </ul>
                        <!-- Header Topbar Info End -->
                    </div>

                    <div class="float--right float--xs-none text-xs-center">
                        <!-- Header Topbar Action Start -->
                        <ul class="header--topbar-action nav">
                            <?php
                            if (!isset($_SESSION['idUser'])) {
                                ?>
                            <li><a href="login.php"><i class="fa fm fa-user-o"></i>Đăng nhập/Đăng ký</a></li>
                            <?php
                            }else{
                                ?>
                                 <li>Xin chào: <?php echo $_SESSION['HoTen'] ?> </li>
                                 <li><a href="logout.php"><i class="fa fm fa-user-o"></i>Đăng xuất</a></li>
                                <?php 
                                
                            } ?>
                        </ul>
                        <!-- Header Topbar Action End -->
                        
                        <!-- Header Topbar Language Start -->
                        <ul class="header--topbar-lang nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>Tiếng Việt<i class="fa flm fa-angle-down"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">Tiếng Anh</a></li>
                                    <li><a href="#">Tiếng Pháp</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <!-- Header Topbar Social End -->
                    </div>
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1">
                        <a href="index.php" class="btn-link">
                            <video autoplay loop width="160px">
                                <source src="img/VNEWS.mp4">
                            </video>
                            </a>
                        </h1>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="">
                            <img src="img/banner.jpg" alt="Advertisement">
                        </a>
                    </div>
                
                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <li class="active"><a href="">Trang chủ</a></li>
                            <?php 
                            $theloai = DanhSachTheLoai();
                            while ($row_theloai = mysqli_fetch_array($theloai)) {
                                $idTL = $row_theloai['idTL']; ?>
                            <li class="dropdown ">
                                <a href="index.php?p=theloaitin&idTL=<?php echo $row_theloai['idTL'] ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $row_theloai['TenTL'] ?><i class="fa flm fa-angle-down"></i></a>

                                <ul class="dropdown-menu">
                                    <?php
                                    $loaitin = DanhSachLoaiTinTheoTL($idTL);
                                    while($row_loaitin = mysqli_fetch_array($loaitin)){
                                    ?>
                                    <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT']?>"><?php echo $row_loaitin['Ten'] ?></a></li>
                                    <?php
                            } ?>
                                </ul>
                            </li>
                            <?php } ?>
                          
                        </ul>
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>

                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                        <input type="hidden" name="p" value="timkiem">
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>