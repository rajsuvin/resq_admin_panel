<?php
include 'connection.php';
$data=mysqli_query($con,"select * from addofficers");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
        </tr>
     <?php
        }
        ?>
    </table>
</body>
</html>