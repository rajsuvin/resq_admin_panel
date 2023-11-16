<?php
include 'connection.php';

$wel = $_GET['app'];
$result = mysqli_query($con, "SELECT status FROM `userreg` WHERE id = '$wel'");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $currentStatus = $row['status'];

    if ($currentStatus === '0') {
        mysqli_query($con, "UPDATE `userreg` SET status = '1' WHERE id = '$wel'");
        echo "User approved!";
    } else {
        echo "User is already approved!";
    }
} else {
    echo "Error fetching user status";
}

header("location: tablebasic.php");
?>

