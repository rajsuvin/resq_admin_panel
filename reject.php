<?php
include 'connection.php';
$dlted1 = $_GET['dlted'];
mysqli_query($con,"DELETE FROM userreg WHERE id='$dlted1'");
header("location:tablebasic.php");
?>