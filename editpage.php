<?php
include 'connection.php';
$edt1 = $_GET['edt'];
$select = mysqli_query($con,"SELECT * FROM addofficers WHERE id='$edt1'");
$data = mysqli_fetch_assoc($select);
// var_dump($data);exit();
if(isset($_POST['sub'])){
    $phone = $_POST['ph'];
    $name = $_POST['nm'];
    $email = $_POST['el'];
    

mysqli_query($con,"UPDATE addofficers SET  phone='$phone', name='$name', email='$email' WHERE id = '$edt1'");
header("location:tablebasicofficer2.php");
}
?>
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Basic Tables - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php 
    include 'header.php'
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php
    include 'sidebar.html'
    ?>
    
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Edit data</h1>
          <p>edit</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Officers</li>
          <li class="breadcrumb-item active"><a href="#">Edit data</a></li>
        </ul>
</div>
<body>
    <form method="post">

        <label for="username">Name:</label>
        <input type="text" name="nm" value="<?php echo $data['name'] ?>"><br><br>

        <label for="email">Email ID:</label>
        <input type="email" name="el" value="<?php echo $data['email']?>"><br><br>

        <label for="phone">Phone no:</label>
        <input type="phone" name="ph" value="<?php echo$data['phone']?>"><br><br>

       

        <input type="submit" name="sub" value="Update">
    </form>
</body>
     

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>