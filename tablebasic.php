<?php
include 'connection.php';
$select = mysqli_query($con,"SELECT * FROM userreg ");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            /* border: 1px solid #4CAF50; */
        }

        a:hover {
            background-color: #45a049;
            /* border: 1px solid #45a049; */
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
    <title>Users Tables - ResQ Admin</title>
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
          <h1><i class="fa fa-th-list"></i> Users Table</h1>
          <p>Newly registered Users</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active"><a href="#">Approve&Reject Users</a></li>
        </ul>
      </div>
      
        
        <body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($select)){
        ?>
        <tr>
        <td style="padding: 15px;"><?php echo $row['id'] ?></td>
            <td style="padding: 15px;"><?php echo $row['name'] ?></td>
            <td style="padding: 15px;"><?php echo $row['email'] ?></td>
            <td style="padding: 15px;"><?php echo $row['phone'] ?></td>

            <td><a href="tablebasic2.php?app=<?php echo $row['id']?>">Approve</a></td>
           
            <td><a href="reject.php?dlted=<?php echo $row['id']?>">Reject</a></td>
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
        
        <div class="clearfix"></div>
       
    </main>
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