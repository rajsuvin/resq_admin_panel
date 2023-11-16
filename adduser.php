<?php
include 'connection.php';
if(isset($_POST['sub'])){
    $phone = $_POST['pn'];
    $name = $_POST['n'];
    $email = $_POST['el'];

    mysqli_query($con,"INSERT INTO approveusers(phno,name,email)VALUES('$phone','$name','$email')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Phone :<input type="phone" name="pn"><br>
        Name : <input type="text" name="n"><br>
        Email : <input type="email" name="el"><br>
        <button name="sub">Submit</button>

    </form>
</body>
</html>

<?php
                

