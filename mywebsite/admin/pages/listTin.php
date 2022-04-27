<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Danh sách tin tức</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item active ">danh sách tin </li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 p-md-0">
        <a href="index.php?page=themTin" class="btn btn-success m-2"><i class="ti-plus"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID | Ngày</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tóm tắt</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Loại tin</th>
                    <th scope="col">Số lần xem</th>
                    <th scope="col">Hoạt động</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $tin = DanhSachTin();
            while ($row_tin = mysqli_fetch_array($tin)) {
                ob_start(); ?>
                <tr>
                    <th scope="row">{idTin}<br>{Ngay}</th>
                    <td>{TieuDe}</td>
                    <td><img src="uploads/{urlHinh}" width="152" height="96"></td>
                    <td>{TomTat}</td>
                    <td>{TheLoai}</td>
                    <td>{LoaiTin}</td>
                    <td>{SoLanXem}</td>

                    <td>        
                        <a style="color: blue; font-size: 20px; padding-right: 30px;" href="index.php?page=suaTin&idTin={idTin}"><i class="ti-pencil-alt"></i></a>
                        <a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color: red; font-size: 20px;" href="index.php?page=xoaTin&idTin={idTin}" class="action-delete"><i class="ti-trash"></i></a>
                    </td>
                </tr>
            <?php
            $s = ob_get_clean();
            $s = str_replace("{idTin}", $row_tin['idTin'], $s);
            $s = str_replace("{Ngay}", $row_tin['Ngay'], $s);
            $s = str_replace("{TieuDe}", $row_tin['TieuDe'], $s);
            $s = str_replace("{urlHinh}", $row_tin['urlHinh'], $s);
            $s = str_replace("{TomTat}", $row_tin['TomTat'], $s);
            $s = str_replace("{TheLoai}", $row_tin['TenTL'], $s);
            $s = str_replace("{LoaiTin}", $row_tin['Ten'], $s);
            $s = str_replace("{SoLanXem}", $row_tin['SoLanXem'], $s);

            echo $s;
            } ?>
    
  </tbody>
</table>
    </div>
</div>