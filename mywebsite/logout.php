<?php
session_start();
unset($_SESSION['idUser']);
unset($_SESSION['Username']);
unset($_SESSION['HoTen']);
unset($_SESSION['idGroup']);
header('Location: login.php');
?>