<?php
include 'connection.php';
$dlt1 = $_GET['dlt'];
mysqli_query($con,"DELETE FROM addofficers WHERE id='$dlt1'");
header("location:tablebasicofficer2.php");
?>