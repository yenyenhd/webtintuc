<?php
require "lib/db.php";
require "lib/home.php";
?>

<option selected>--Chọn loại tin--</option>
<?php
$idTL = $_GET['idTL'];
$loaitin = DanhSachLoaiTinTheoTL($idTL);

while ($row_loaitin = mysqli_fetch_array($loaitin)) {
    ?>
    
<option value="<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></option>
<?php
} ?>