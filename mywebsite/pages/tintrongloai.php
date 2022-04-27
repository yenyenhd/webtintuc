<?php 
    $idLT = $_GET['idLT'];
    $idLT = (int)$idLT;
?>
<?php
$bc = breadCrumb($idLT);
$row_bc = mysqli_fetch_array($bc);
 ?>

<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li><a href="index.php?p=theloaitin&idTL=<?php echo $row_bc['idTL'] ?>" class="btn-link"><?php echo $row_bc['TenTL'] ?></a></li>
            <li class="active"><span><?php echo TenLoaiTin($idLT) ?></span></li>
            
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
                                    $sotin1trang = 6;
                                    if(isset($_GET['trang'])){
                                        $trang = $_GET['trang'];
                                        $trang = (int)$trang;
                                    }else{
                                        $trang = 1;
                                    }
                                    $form = ($trang - 1)*$sotin1trang;
                                    $tin = TinTheoLoaiTin_PhanTrang($idLT, $form, $sotin1trang);
                                    while ($row_tin = mysqli_fetch_array($tin)) {
                                        ?>
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="post--img">
                                                        <a href="chitiet/<?php echo $row_tin['idTin'] ?>-<?php echo $row_tin['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_tin['urlHinh'] ?>" alt=""></a>
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
                                                            <h3 class="h4"><a href="chitiet/<?php echo $row_tin['idTin'] ?>-<?php echo $row_tin['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tin['TieuDe'] ?></a></h3>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p><?php echo $row_tin['TomTat'] ?></p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="chitiet/<?php echo $row_tin['idTin'] ?>-<?php echo $row_tin['TieuDe_KhongDau'] ?>.html">Continue Reading...</a>
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
                      
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <div class="pagination--wrapper ptop--30 pbottom--30 clearfix">
                
                                <ul class="pagination float--right">
                                    <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                                    <?php
                                    $t = TinTheoLoaiTin($idLT);
                                    $tongsotin = mysqli_num_rows($t);
                                    $tongsotrang = ceil($tongsotin/$sotin1trang);
                                    for ($i=1; $i<$tongsotrang; $i++) {
                                        ?>
                                    <li class="<?php if($i == $trang) echo "active"?>"><a href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <?php
                                    } ?>
                            
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <?php require "blocks/sidebar.php";  ?>
        </div>
    </div>
</div>