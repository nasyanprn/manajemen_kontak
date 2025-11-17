<?php
include "../auth/cek_login.php";

$id = $_GET['id'];
unset($_SESSION['kontaks'][$id]);
header("Location: index.php");
exit;
?>
