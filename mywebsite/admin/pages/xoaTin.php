<?php
$idTin = $_GET['idTin'];
$idTin =(int)$idTin;
$qr = "DELETE FROM tin WHERE idTin = '$idTin'";
mysqli_query($conn, $qr);
header('location: index.php?page=listTin');