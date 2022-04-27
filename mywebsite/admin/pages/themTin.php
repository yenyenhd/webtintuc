<?php
if(isset($_POST['btn-them'])){
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
    
    // Check file bị trùng
    if(file_exists($file_path)){
        echo "File bị trùng";
        $flag_ok = false;
    }

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
    $Ngay = date("Y-m-d H:i:s");
    $idUser = $_SESSION['idUser'];
    $Content = $_POST['Content'];
    $idLT = $_POST['idLT'];
    $idTL = $_POST['idTL'];
    $SoLanXem = 0;
    $TinNoiBat = $_POST['TinNoiBat'];
    $AnHien = $_POST['AnHien'];
    $qr = "INSERT INTO tin VALUE(null, '$TieuDe', '$TieuDe_KhongDau', '$TomTat', '$urlHinh', 
    '$Ngay', '$idUser', '$Content', '$idLT', '$idTL', '$SoLanXem', '$TinNoiBat', '$AnHien' )";

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
                <li class="breadcrumb-item active ">thêm</li>
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
                    <input type="text" class="form-control" name="TieuDe" placeholder="Nhập tiêu đề...">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Hình ảnh</label>
                <div class="col-sm-9">
                    <input type="file" name="urlHinh" id="urlHinh"/>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Tóm tắt</label>
                <div class="col-sm-9">
                    <textarea name="TomTat" id="TomTat" cols="80" rows="10"></textarea>
                    <script>    CKEDITOR.replace( 'TomTat' );</script>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Nội dung</label>
                <div class="col-sm-9">
                    <textarea name="Content" id="Content" cols="80" rows="10"></textarea>
                    <script>    CKEDITOR.replace( 'Content' );</script>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Thể loại</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="idTL" id="idTL">
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
                <label for="" class="col-sm-3 col-form-label">Loại tin</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="idLT" id="idLT">
                        <option selected>--Chọn loại tin--</option>
                        
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">Nổi bật</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input type="radio" id="css" name="TinNoiBat" value="1">
                        <label for="Hien">Nổi bật</label><br>
                        <input type="radio" id="css" name="TinNoiBat" value="0">
                        <label for="An">Không</label>
                    </div>
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

