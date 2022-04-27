<div class="main--content">
            <!-- Post Items Start -->
    <div class="post--items post--items-1 pd--30-0">
        <div class="row gutter--15">
            <div class="col-md-3">
                <div class="row gutter--15">
                <?php 
                    $tinbentrai = TinMoiTheoTheLoai_BenTrai($idTL);
                    while($row_bentrai = mysqli_fetch_array($tinbentrai)){
                ?>
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="chitiet/<?php echo $row_bentrai['idTin'] ?>-<?php echo $row_bentrai['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_bentrai['urlHinh'] ?>" alt=""></a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo $row_bentrai['Ngay'] ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="chitiet/<?php echo $row_bentrai['idTin'] ?>-<?php echo $row_bentrai['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_bentrai['TieuDe'] ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                <?php } ?>
                   
                </div>
            </div>

            <div class="col-md-6">
                <!-- Post Item Start -->
                <?php 
                    $tingiua = TinMoiTheoTheLoai_MotTin($idTL);
                    $row_giua = mysqli_fetch_array($tingiua);
                ?>
                <div class="post--item post--layout-1 post--title-larger">
                    <div class="post--img">
                        <a href="chitiet/<?php echo $row_giua['idTin'] ?>-<?php echo $row_giua['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_giua['urlHinh']?>" alt=""></a>
                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?php echo $row_giua['Ngay']?></a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><a href="chitiet/<?php echo $row_giua['idTin'] ?>-<?php echo $row_giua['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_giua['TieuDe']?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-md-3">
                <div class="row gutter--15">
                <?php 
                    $tinbenphai = TinMoiTheoTheLoai_BenPhai($idTL);
                    while($row_benphai = mysqli_fetch_array($tinbenphai)){
                ?>
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="chitiet/<?php echo $row_benphai['idTin'] ?>-<?php echo $row_benphai['TieuDe_KhongDau'] ?>.html>" class="thumb"><img src="admin/uploads/<?php echo $row_benphai['urlHinh']?>" alt=""></a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        
                                        <li><a href="#"><?php echo $row_benphai['Ngay']?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="chitiet/<?php echo $row_benphai['idTin'] ?>-<?php echo $row_benphai['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_benphai['TieuDe']?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                    <?php } ?>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Post Items End -->
</div>