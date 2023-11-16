<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
              padding: 20px;
            }
        
            .settings-container {
              max-width: 600px;
              margin: auto;
            }
        
            .card {
              margin-bottom: 20px;
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
        <title>Setting - ResQ</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
<body class="app sidebar-mini rtl">
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
          <h1><i class="fa fa-calendar"></i>Setting</h1>
          <p>Settings of admin panel</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Settings</a></li>
        </ul>
      </div>

      <div class="settings-container">
    <h2 class="text-center mb-4">Admin Panel Settings</h2>

    <!-- General Settings -->
    <div class="card">
      <div class="card-header">
        General Settings
      </div>
      <div class="card-body">
        <!-- Your general settings form goes here -->
        <!-- Example: -->
        <form>
          <div class="form-group">
            <label for="siteName">Site Name:</label>
            <input type="text" class="form-control" id="siteName" placeholder="Enter site name">
          </div>
          <div class="form-group">
            <label for="logo">Logo URL:</label>
            <input type="text" class="form-control" id="logo" placeholder="Enter logo URL">
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>

    <!-- Security Settings -->
    <div class="card">
      <div class="card-header">
        Security Settings
      </div>
      <div class="card-body">
        <!-- Your security settings form goes here -->
        <!-- Example: -->
        <form>
          <div class="form-group">
            <label for="password">Change Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter new password">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
          </div>
          <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  
</body>
</html>