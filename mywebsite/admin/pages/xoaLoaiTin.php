<?php
$idLT = $_GET['idLT'];
$idLT =(int)$idLT;
$qr = "DELETE FROM loaitin WHERE idLT = '$idLT'";
mysqli_query($conn, $qr);
header('location: index.php?page=listLoaiTin');