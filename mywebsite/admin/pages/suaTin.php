<?php
$idTin = $_GET['idTin'];
$idTin =(int)$idTin;
$row_tin = ChiTietTin($idTin);
?>

<?php
if(isset($_POST['btn-sua'])){
    $check = getimagesize($_FILES["urlHinh"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $flag_ok = true;
    } else {
        echo "File is not an image.";
        $flag_ok = false;
    }
    
    $folder_path = 'uploads/';
    $file_path = $folder_path.$_FILES['urlHinh']['name'];
    
    

    $ex = array('jpg', 'png', 'jpeg');
    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    if(!in_array($file_type, $ex)){
        echo "Loại file không hợp lệ";
        $flag_ok = false;
    }
    if($_FILES['urlHinh']['size'] > 500000){
        echo "Dung lượng file quá lớn";
        $flag_ok = false;

    }
    if($flag_ok){
        move_uploaded_file($_FILES['urlHinh']['tmp_name'], $file_path);
    }
  
    $TieuDe = $_POST['TieuDe'];
    $TieuDe_KhongDau = changeTitle($TieuDe);
    $TomTat = $_POST['TomTat'];
    $urlHinh = $_FILES['urlHinh']['name'];
    $Ngay = date("Y-m-d");
    $idUser = $_SESSION['idUser'];
    $Content = $_POST['Content'];
    $idLT = $_POST['idLT'];
    $idTL = $_POST['idTL'];
    $SoLanXem = 0;
    $TinNoiBat = $_POST['TinNoiBat'];
    $AnHien = $_POST['AnHien'];
    if($urlHinh != null) {
        $qr = "UPDATE `tin` SET `TieuDe` = '$TieuDe', `TieuDe_KhongDau` = '$TieuDe_KhongDau', `TomTat`= '$TomTat', `urlHinh` = '$urlHinh',
    `Ngay` = '$Ngay', `idUser` = '$idUser', `Content` = '$Content', `idLT` = '$idLT', `idTL` = $idTL, `SoLanXem` = '$SoLanXem', `TinNoiBat` = '$TinNoiBat', `AnHien` = '$AnHien' WHERE idTin = '$idTin' ";
    mysqli_query($conn, $qr);
    header('location: index.php?page=listTin');
    }
    $qr = "UPDATE `tin` SET `TieuDe` = '$TieuDe', `TieuDe_KhongDau` = '$TieuDe_KhongDau', `TomTat`= '$TomTat',
    `Ngay` = '$Ngay', `idUser` = '$idUser', `Content` = '$Content', `idLT` = '$idLT', `idTL` = $idTL, `SoLanXem` = '$SoLanXem', `TinNoiBat` = '$TinNoiBat', `AnHien` = '$AnHien' WHERE idTin = '$idTin' ";

    mysqli_query($conn, $qr);
    header('location: index.php?page=listTin');
}

?>
<div class="content-header">
    <div class="row  mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Thêm tin tức</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin/index.php">Home </a></li>
                <li class="breadcrumb-item"><a href="index.php?page=listTin">Tin tức</a></li>
                <li class="breadcrumb-item active ">cập nhật</li>
            </ol>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-9">
        <form action="" method="POST" enctype="multipart/form-data">
        
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tiêu đề</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="TieuDe" value="<?php echo $row_tin['TieuDe'] ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Hình ảnh</label>
                <div class="col-sm-9">
                    <input type="file" name="urlHinh" id="urlHinh" value="<?php echo $row_tin['urlHinh'] ?>">
                    <img src="uploads/<?php echo $row_tin['urlHinh'] ?>" alt=""  width="152" height="96">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tóm tắt</label>
                <div class="col-sm-9">
                    <textarea name="TomTat" id="TomTat" cols="80" rows="10"><?php echo $row_tin['TomTat'] ?></textarea>
                    <script>    CKEDITOR.replace( 'TomTat' );</script>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Nội dung</label>
                <div class="col-sm-9">
                    <textarea name="Content" id="Content" cols="80" rows="10"><?php echo $row_tin['Content'] ?></textarea>
                    <script>    CKEDITOR.replace( 'Content' );</script>
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
                        <option <?php if($row_theloai['idTL'] == $row_tin['idTL']) echo "selected" ?> value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Loại tin</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="idLT">
                        <option selected>--Chọn thể loại--</option>
                        <?php
                        $loaitin = DanhSachLoaiTin();
                        while($row_loaitin = mysqli_fetch_array($loaitin)){
                        ?>
                        <option <?php if($row_loaitin['idLT'] == $row_tin['idLT']) echo "selected" ?> value="<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">Nổi bật</div>
                <div class="col-sm-9">
                    <div class="form-check">
                    <input <?php if($row_tin['TinNoiBat'] == 1) echo "checked" ?> type="radio" id="css" name="TinNoiBat" value="1">
                        <label for="Hien">Nổi bật</label><br>
                        <input <?php if($row_tin['TinNoiBat'] == 0) echo "checked" ?> type="radio" id="css" name="TinNoiBat" value="0">
                        <label for="An">Không</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Ẩn hiện</div>
                <div class="col-sm-9">
                    <div class="form-check">
                    <input <?php if($row_tin['AnHien'] == 1) echo "checked" ?> type="radio" id="css" name="AnHien" value="1">
                        <label for="Hien">Hiện</label><br>
                        <input <?php if($row_tin['AnHien'] == 0) echo "checked" ?> type="radio" id="css" name="AnHien" value="0">
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
