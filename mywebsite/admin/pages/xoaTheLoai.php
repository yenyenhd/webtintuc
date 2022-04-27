<?php
$idTL = $_GET['idTL'];
$idTL =(int)$idTL;
$qr = "DELETE FROM theloai WHERE idTL = '$idTL'";
mysqli_query($conn, $qr);
header('location: index.php?page=listTheLoai');