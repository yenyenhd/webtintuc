<?php
$idLT = $_GET['idLT'];
$idLT =(int)$idLT;
$row_loaitin = ChiTietLoaiTin($idLT);
?>
<?php
if(isset($_POST['btn-sua'])){
    $Ten = $_POST['Ten'];
    $Ten_KhongDau = changeTitle($Ten);
    $ThuTu = $_POST['ThuTu'];
    $ThuTu = (int)$ThuTu;
    $AnHien = $_POST['AnHien'];
    $AnHien = (int)$AnHien;
    $idTL = $_POST['idTL'];
    $idTL = (int)$idTL;

    $qr = "UPDATE `loaitin` SET `Ten` = '$Ten', `Ten_KhongDau` = '$Ten_KhongDau', `ThuTu`= '$ThuTu', `AnHien` = '$AnHien', `idTL` = $idTL WHERE idLT = '$idLT' ";
    mysqli_query($conn, $qr);
    header('location: index.php?page=listLoaiTin');
}

?>
<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Cập nhật loại tin</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item"><a href="index.php?page=listLoaiTin">Loại tin</a></li>
                <li class="breadcrumb-item active ">cập nhật</li>
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
                    <input type="text" class="form-control" name="Ten" value="<?php echo $row_loaitin['Ten'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thể loại</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="idTL">
                        <option >--Chọn thể loại--</option>
                        <?php
                        $theloai = DanhSachTheLoai();
                        while($row_theloai = mysqli_fetch_array($theloai)){
                        ?>
                        <option <?php if($row_theloai['idTL'] == $row_loaitin['idTL']) echo "selected" ?> value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thứ tự</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="ThuTu" value="<?php echo $row_loaitin['ThuTu'] ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">Ẩn hiện</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input <?php if($row_loaitin['AnHien'] == 1) echo "checked" ?> type="radio" id="css" name="AnHien" value="1">
                        <label for="Hien">Hiện</label><br>
                        <input <?php if($row_loaitin['AnHien'] == 0) echo "checked" ?> type="radio" id="css" name="AnHien" value="0">
                        <label for="An">Ẩn</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9">
                <button type="submit" class="btn btn-primary" name="btn-sua">Cập nhật</button>
                </div>
            </div>
        </form>

    </div>
</div>