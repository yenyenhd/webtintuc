<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Tin mới cập nhật</h2>
        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                <?php
                $tinmoi = TinMoi();
                while($row_tinmoi = mysqli_fetch_array($tinmoi)){
                ?>
                <li>
                    <h3 class="h3"><a href="#"><?php echo $row_tinmoi['TieuDe']  ?></a></h3>
                </li>
                <?php } ?>
               
            </ul>
        </div>
    </div>
</div>