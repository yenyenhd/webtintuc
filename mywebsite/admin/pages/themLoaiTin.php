<?php
if(isset($_POST['btn-them'])){
    $Ten = $_POST['Ten'];
    $Ten_KhongDau = changeTitle($Ten);
    $ThuTu = $_POST['ThuTu'];
    $ThuTu = (int)$ThuTu;
    $AnHien = $_POST['AnHien'];
    $AnHien = (int)$AnHien;
    $idTL = $_POST['idTL'];
    $idTL = (int)$idTL;

    $qr = "INSERT INTO loaitin VALUE(null, '$Ten', '$Ten_KhongDau', '$ThuTu', '$AnHien', '$idTL' )";
    mysqli_query($conn, $qr);
    header('location: index.php?page=listLoaiTin');
}

?>
<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Thêm loại tin</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item"><a href="index.php?page=listLoaiTin">Loại tin</a></li>
                <li class="breadcrumb-item active ">thêm</li>
            </ol>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-9">
        <form action="" method="POST" enctype="multipart/form-data">
        
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tên loại tin</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Ten" placeholder="Nhập tên loại tin...">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thể loại</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="idTL">
                        <option selected>--Chọn thể loại--</option>
                        <?php
                        $theloai = DanhSachTheLoai();
                        while($row_theloai = mysqli_fetch_array($theloai)){
                        ?>
                        <option value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thứ tự</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="ThuTu">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">Ẩn hiện</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input type="radio" id="css" name="AnHien" value="1">
                        <label for="Hien">Hiện</label><br>
                        <input type="radio" id="css" name="AnHien" value="0">
                        <label for="An">Ẩn</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9">
                <button type="submit" class="btn btn-primary" name="btn-them">Thêm</button>
                </div>
            </div>
        </form>

    </div>
</div>