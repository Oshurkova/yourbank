<?php
    session_start();
    $id = $_SESSION['id'];
    if (!$id) {
      header("location: login.php");
    } 
    $mysqli = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT account, summ from clientpersone where id = $id";
    $table_account = "";
    $table_summ = "";
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table_account = $row['account']; 
            $table_summ = $row['summ']; 
        }
      }
?>
<!DOCTYPE html>
<html amp >
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="amp-script-src" content="">
  <link rel="stylesheet" href="customstyle.css">
  <title>Balance</title>
  
<link rel="canonical" href="page2.php">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic&display=swap" rel="stylesheet">
 

 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-sd86FCnxa1" layout="nodisplay" side="right">
    <div class="builder-sidebar" id="builder-sidebar">
      <button on="tap:sidebar.close" class="close-sidebar">
      <span></span>
      <span></span>
      </button>
    
      
        <!-- NAVBAR ITEMS -->
        <ul class="navbar-nav nav-dropdown mbr-column" data-app-modern-menu="true"><li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page3.php">История</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page4.php">Переводы</a>
          </li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md mbr-bold btn-white display-7" href="logout.php">Выйти</a></div>
        <!-- SHOW BUTTON END -->
      </div>
  </amp-sidebar>
  
  <section class="menu horizontal-menu cid-sd86FCnxa1" id="menu1-6">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top">
    <div class="menu-container mbr-jc-s container-fluid">
      <div class="navbar-brand">
          <span class="navbar-logo">
              <amp-img src="assets/images/logo1.png" layout="responsive" width="45.71808510638298" height="45" alt="Mobirise" class="mobirise-loader">
                  <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                  
              </amp-img>
          </span>
          <p class="brand-name mbr-fonts-style mbr-bold display-5">YourBank 2020</p>
      </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <!-- NAVBAR ITEMS -->
        <ul class="navbar-nav nav-dropdown mbr-column" data-app-modern-menu="true"><li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page3.php">История</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page4.php">Переводы</a>
          </li><li class="nav-item"><a class="nav-link link text-primary display-7" href="page2.php">Баланс</a></li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md mbr-bold btn-white display-7" href="logout.php">Выйти</a></div>
        <!-- SHOW BUTTON END -->
      </div>
      <!-- COLLAPSED MENU END -->
      
      <button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>
  <!-- AMP plug -->
  
    
</section>

<section class="content15 mbr-section cid-sd8gnZZOyv" id="content15-8">

    
    
    <div class="container mbr-px-5">
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <h3 class="mbr-section-title mbr-fonts-style align-center mbr-pt-1 mbr-pb-2 display-5">
                    Номер счёта</h3>
                <p class="mbr-text mbr-fonts-style align-center mbr-py-1 display-4"><?php echo $table_account ?></p>             
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 last-child">
                <h3 class="mbr-section-title mbr-fonts-style align-center mbr-pt-1 mbr-pb-2 display-5">
                    Баланс на счету</h3>
                <p class="mbr-text mbr-fonts-style align-center mbr-py-1 display-4">
                  <?php echo $table_summ ?>
                </p> 
            </div>
        
            
        
            
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-sd8hY8LHp9" id="content5-d">

    

    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="mbr-section-btn mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-8 align-center"><a class="btn btn-primary display-4" href="https://mobiri.se">Скачать справку по счёту</a></div>
        </div>
    </div>
  
  
</body>
</html>