<?php
$idTL = $_GET['idTL'];
$idTL =(int)$idTL;
$row_theloai = ChiTietTheLoai($idTL);
?>

<?php
if(isset($_POST['btn-sua'])){
    $TenTL = $_POST['TenTL'];
    $TenTL_KhongDau = changeTitle($TenTL);
    $ThuTu = $_POST['ThuTu'];
    $ThuTu = (int)$ThuTu;
    $AnHien = $_POST['AnHien'];
    $AnHien = (int)$AnHien;

    $qr = "UPDATE `theloai` SET `TenTL` = '$TenTL', `TenTL_KhongDau` = '$TenTL_KhongDau', `ThuTu`= '$ThuTu', `ViTri` = null, `AnHien` = '$AnHien' WHERE idTL = $idTL ";
    mysqli_query($conn, $qr);
    header('location: index.php?page=listTheLoai');
}
?>
<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Cập nhật thể loại</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item"><a href="index.php?page=listTheLoai">Thể loại</a></li>
                <li class="breadcrumb-item active ">cập nhật</li>
            </ol>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-9">
        <form action="" method="POST" enctype="multipart/form-data">
        
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tên thể loại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="TenTL" value="<?php echo $row_theloai['TenTL'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thứ tự</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="ThuTu" value="<?php echo $row_theloai['ThuTu'] ?>" >
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">Ẩn hiện</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input <?php if($row_theloai['AnHien'] == 1) echo "checked" ?> type="radio" id="css" name="AnHien" value="1">
                        <label for="Hien">Hiện</label><br>
                        <input <?php if($row_theloai['AnHien'] == 0) echo "checked" ?> type="radio" id="css" name="AnHien" value="0">
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