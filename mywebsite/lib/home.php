<?php
    function DanhSachTheLoai(){
        global $conn;
        $qr = "SELECT * FROM theloai";
        return mysqli_query($conn, $qr);
    }
    function DanhSachLoaiTinTheoTL($idTL){
        global $conn;
        $qr = "SELECT * FROM loaitin WHERE idTL=$idTL";
        return mysqli_query($conn, $qr);
    }
    function DanhSachTheLoai_Home($ViTri){
        global $conn;
        $qr = "SELECT * FROM theloai WHERE ViTri = $ViTri";
        return mysqli_query($conn, $qr);
    }
    function TinMoiNhat_MotTin() {
        global $conn;
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LiMIT 0, 1";
        return mysqli_query($conn, $qr);
    }
    function TinMoiNhat_HaiTin() {
        global $conn;
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LiMIT 1, 2";
        return mysqli_query($conn, $qr);
    }
    function TinMoiNhat_HaiTinTiep() {
        global $conn;
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LiMIT 3, 2";
        return mysqli_query($conn, $qr);
    }
    function TinTheoLoai_MotTin($idTL) {
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LiMIT 0, 1";
        return mysqli_query($conn, $qr);
    }
    function TinTheoLoai_BonTin($idTL) {
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LiMIT 1,4";
        return mysqli_query($conn, $qr);
    }
   
    
    function TinXemNhieuNhat() {
        global $conn;
        $qr = "
            SELECT * FROM tin
            ORDER BY SoLanXem DESC
            LiMIT 0, 6
        ";
        return mysqli_query($conn, $qr);
    }

    // Trang thể loại tin
    function TenTheLoai($idTL){
        global $conn;
        $qr = "SELECT * FROM theloai WHERE idTL = $idTL";
        $tentheloai = mysqli_query($conn, $qr);
        $row_tentheloai = mysqli_fetch_array($tentheloai);
        return $row_tentheloai['TenTL'];
    }
    function TinMoiTheoTheLoai_MotTin($idTL){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LiMIT 0, 1";
        return mysqli_query($conn, $qr);
    }
    function TinMoiTheoTheLoai_BenTrai($idTL){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LiMIT 1, 2";
        return mysqli_query($conn, $qr);
    }
    function TinMoiTheoTheLoai_BenPhai($idTL){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LiMIT 3, 2";
        return mysqli_query($conn, $qr);
    }
    function TinTheoLoaiBaTin($idLT){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LiMIT 3";
        return mysqli_query($conn, $qr);
    }
    // Trang loại tin
    function breadCrumb($idLT){
        global $conn;
        $qr = "SELECT theloai.idTL, theloai.TenTL, loaitin.Ten FROM theloai INNER JOIN loaitin
        ON theloai.idTL = loaitin.idTL WHERE idLT = $idLT";
        return mysqli_query($conn, $qr);
       }
    function TenLoaiTin($idLT){
        global $conn;
        $qr = "SELECT * FROM loaitin WHERE idLT = $idLT";
        $tenloaitin = mysqli_query($conn, $qr);
        $row_tenloaitin = mysqli_fetch_array($tenloaitin);
        return $row_tenloaitin['Ten'];
    }
    function TinTheoLoaiTin($idLT){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC";
        return mysqli_query($conn, $qr);
    }
    function TinTheoLoaiTin_PhanTrang($idLT, $form, $sotin1trang){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT $form, $sotin1trang";
        return mysqli_query($conn, $qr);
    }
   
    // Trang chi tiết tin
    function ChiTietTin($idTin) {
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTin = $idTin";
        return mysqli_query($conn, $qr);
    }
    function breadCrumb_chitiettin($idTin){
        global $conn;
        $qr = "SELECT theloai.idTL, theloai.TenTL, loaitin.Ten, loaitin.idLT FROM theloai INNER JOIN tin
        ON theloai.idTL = tin.idTL INNER JOIN loaitin ON loaitin.idLT = tin.idLT WHERE idTin = $idTin";
        return mysqli_query($conn, $qr);
       }
    function TinCungLoai($idTin, $idLT){
        global $conn;
        $qr = "SELECT * FROM tin WHERE idTin <> $idTin AND idLT = $idLT ORDER BY RAND() LIMIT 0, 2";
        return mysqli_query($conn, $qr);
    }
    function CapNhatSoLanXem($idTin){
        global $conn;
        $qr = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin = $idTin";
        mysqli_query($conn, $qr);
    }

    function Comment($idTin){
        global $conn;
        $qr = "SELECT comment.id, comment.NoiDung, comment.Ngay, users.HoTen FROM comment INNER JOIN users
        ON comment.idUser = users.idUser WHERE idTin = $idTin";
        return mysqli_query($conn, $qr);
    }
    function SoComment($idTin){
        global $conn;
        $qr = "SELECT count(NoiDung) as tongsocomment from comment where idTin=$idTin";
        $row = mysqli_query($conn, $qr);
        return mysqli_fetch_array($row);
    }
    // Tìm kiếm
    function TimKiem($tukhoa){
        global $conn;
        $qr = "SELECT * FROM tin WHERE TieuDe REGEXP '$tukhoa' ORDER BY idTin DESC";
        return mysqli_query($conn, $qr);
    }

    // Tin nổi bật
    function TinNoiBat(){
        global $conn;
        $qr = "SELECT * FROM tin WHERE TinNoiBat = 1 ORDER BY idTin DESC LIMIT 4";
        return mysqli_query($conn, $qr);
    }
    // Xem nhiều
    function XemNhieu(){
        global $conn;
        $qr = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 4";
        return mysqli_query($conn, $qr);
    }
    // Tin mới
    function TinMoi(){
        global $conn;
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 5";
        return mysqli_query($conn, $qr);
    }

    // Bình chọn
    function BinhChon(){
        global $conn;
        $qr = "SELECT * FROM binhchon ORDER BY idBC DESC LIMIT 2";
        return mysqli_query($conn, $qr);
    }

    // Comment
    function BinhLuan(){
        global $conn;
        $qr = "SELECT comment.id, comment.NoiDung, comment.Ngay, users.HoTen FROM comment INNER JOIN users
        ON comment.idUser = users.idUser ORDER BY id DESC LIMIT 3";
        return mysqli_query($conn, $qr);
    }
    
