<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Danh sách thể loại</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item active ">danh sách thể loại</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 p-md-0">
        <a href="index.php?page=themTheLoai" class="btn btn-success m-2"><i class="ti-plus"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">idTL</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Tên không dấu</th>
                    <th scope="col">Thứ tự</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Hoạt động</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $theloai = DanhSachTheLoai();
            while ($row_theloai = mysqli_fetch_array($theloai)) {
                ob_start(); ?>
                <tr>
                    <th scope="row">{idTL}</th>
                    <td>{TenTL}</td>
                    <td>{TenTL_KhongDau}</td>
                    <td>{ThuTu}</td>
                    <td>{AnHien}</td>
                    <td>        
                        <a style="color: blue; font-size: 20px; padding-right: 30px;" href="index.php?page=suaTheLoai&idTL={idTL}"><i class="ti-pencil-alt"></i></a>
                        <a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color: red; font-size: 20px;" href="index.php?page=xoaTheLoai&idTL={idTL}" class="action-delete"><i class="ti-trash"></i></a>
                    </td>
                </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{idTL}", $row_theloai['idTL'], $s);
            $s = str_replace("{TenTL}", $row_theloai['TenTL'], $s);
            $s = str_replace("{TenTL_KhongDau}", $row_theloai['TenTL_KhongDau'], $s);
            $s = str_replace("{ThuTu}", $row_theloai['ThuTu'], $s);
            $s = str_replace("{AnHien}", $row_theloai['AnHien'], $s);
            echo $s;
            } ?>
    
  </tbody>
</table>
    </div>
</div>