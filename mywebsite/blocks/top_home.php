<div class="main--content">
                    <!-- Post Items Start -->
    <?php
         $tinmoinhat_mottin = TinMoiNhat_MotTin();
         $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin);
    ?>
    <div class="post--items post--items-1 pd--30-0">
        <div class="row gutter--15">
            <div class="col-md-6">
                <!-- Post Item Start -->
                <div class="post--item post--layout-1 post--title-larger">
                    <div class="post--img">
                        <a href="chitiet/<?php echo $row_tinmoinhat_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_mottin['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_tinmoinhat_mottin['urlHinh'] ?>" alt="" width="578" height="402"></a>
                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?php echo $row_tinmoinhat_mottin['Ngay'] ?></a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><a href="chitiet/<?php echo $row_tinmoinhat_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_mottin['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_tinmoinhat_mottin['TieuDe'] ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </div>
            
            <div class="col-md-3">
                <div class="row gutter--15">
                <?php 
              $haitinmoi= TinMoiNhat_HaiTin();
              while ($row_haitinmoi = mysqli_fetch_array($haitinmoi)) {
                  ?>
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="chitiet/<?php echo $row_haitinmoi['idTin'] ?>-<?php echo $row_haitinmoi['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_haitinmoi['urlHinh'] ?>" alt=""></a>
        
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo $row_haitinmoi['Ngay'] ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="chitiet/<?php echo $row_haitinmoi['idTin'] ?>-<?php echo $row_haitinmoi['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_haitinmoi['TieuDe'] ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                    <?php
              } ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row gutter--15">
                <?php 
              $haitinmoitiep= TinMoiNhat_HaiTinTiep();
              while ($row_haitinmoitiep = mysqli_fetch_array($haitinmoitiep)) {
                  ?>
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="chitiet/<?php echo $row_haitinmoitiep['idTin'] ?>-<?php echo $row_haitinmoitiep['TieuDe_KhongDau'] ?>.html" class="thumb"><img src="admin/uploads/<?php echo $row_haitinmoitiep['urlHinh'] ?>" alt=""></a>
                                
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo $row_haitinmoitiep['Ngay'] ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h2 class="h4"><a href="chitiet/<?php echo $row_haitinmoitiep['idTin'] ?>-<?php echo $row_haitinmoitiep['TieuDe_KhongDau'] ?>.html" class="btn-link"><?php echo $row_haitinmoitiep['TieuDe'] ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                    <?php
              } ?>
                </div>
            </div>
    
        </div>
    </div>
    <!-- Post Items End -->
</div>