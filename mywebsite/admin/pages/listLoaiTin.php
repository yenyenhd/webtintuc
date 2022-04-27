<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Danh sách loại tin</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item active ">danh sách loại tin</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 p-md-0">
        <a href="index.php?page=themLoaiTin" class="btn btn-success m-2"><i class="ti-plus"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên loại tin</th>
                    <th scope="col">Tên không dấu</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Thứ tự</th>
                    <th scope="col">Ẩn hiện</th>
                    <th scope="col">Hoạt động</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $loaitin = DanhSachLoaiTin();
            while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                ob_start(); ?>
                <tr>
                    <th scope="row">{idLT}</th>
                    <td>{Ten}</td>
                    <td>{Ten_KhongDau}</td>
                    <td>{TenTL}</td>
                    <td>{ThuTu}</td>
                    <td>{AnHien}</td>
                    <td>        
                        <a style="color: blue; font-size: 20px; padding-right: 30px;" href="index.php?page=suaLoaiTin&idLT={idLT}"><i class="ti-pencil-alt"></i></a>
                        <a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color: red; font-size: 20px;" href="index.php?page=xoaLoaiTin&idLT={idLT}" class="action-delete"><i class="ti-trash"></i></a>
                    </td>
                </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{idLT}", $row_loaitin['idLT'], $s);
            $s = str_replace("{Ten}", $row_loaitin['Ten'], $s);
            $s = str_replace("{Ten_KhongDau}", $row_loaitin['Ten_KhongDau'], $s);
            $s = str_replace("{TenTL}", $row_loaitin['TenTL'], $s);
            $s = str_replace("{ThuTu}", $row_loaitin['ThuTu'], $s);
            $s = str_replace("{AnHien}", $row_loaitin['AnHien'], $s);
            echo $s;
            } ?>
    
  </tbody>
</table>
    </div>
</div>