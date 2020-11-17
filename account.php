<?php
    session_start();
    $id = $_SESSION['id'];
    if (!$id) {
      header("location: login.php");
    }
    $mysqli = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT fio, phone, arest, account, summ from clientpersone where id = $id";
    $fio = "";
    $phone = "";
    $arest = 0;
    $account = 0;
    $summ = 0;
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $fio = $row['fio'];
            $phone = $row['phone']; 
            $arest = intval($row['arest']); 
            $account = intval($row['account']); 
            $summ = intval($row['summ']); 
        }
      }
      if ($arest == 1) {
        $arest = 'На счету действует арест';
      } else {
        $arest = 'Арест отсутствует';
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
  <link rel="shortcut icon" href="assets/images/logo1-121x119.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="amp-script-src" content="">
  <link rel="stylesheet" href="customstyle.css">
  <title>Operations</title>
  
<link rel="canonical" href="page3.php">
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
          </li><li class="nav-item">
            <a class="nav-link link text-primary display-7" href="account.php">Личный кабинет</a>
          </li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md mbr-bold btn-white display-7" href="logout.php">Выйти</a></div>
        <!-- SHOW BUTTON END -->
      </div>
  </amp-sidebar>
  
  <section class="menu horizontal-menu cid-sd86FCnxa1" id="menu1-e">
    
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
          </li><li class="nav-item">
            <a class="nav-link link text-primary display-7" href="account.php">Личный кабинет</a>
          </li></ul>
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

<section margin-left="20px" id="content15-b">




<div style="margin-left:45px;"> 
<br>
<h2 style="color: #3273a8; font-weight: bold;" class="mbr-section-title mbr-fonts-style align-left pb-3 display-2" >Фамилия Имя Отчество</h2>
<br>      

<h3 class="mbr-section-subtitle mbr-fonts-style align-left pb-5 mbr-light display-5"><?php echo $fio ?></h3>

<h2 style="color: #3273a8; font-weight: bold;" class="mbr-section-title mbr-fonts-style align-left pb-3 display-2">Номер телефона</h2>
<br>      
<h3 class="mbr-section-subtitle mbr-fonts-style align-left pb-5 mbr-light display-5"><?php echo $phone ?></h3>

<h2 style="color: #3273a8; font-weight: bold;" class="mbr-section-title mbr-fonts-style align-left pb-3 display-2">Статус ареста</h2>
<br>      
<h3 class="mbr-section-subtitle mbr-fonts-style align-left pb-5 mbr-light display-5"><?php echo $arest ?></h3>

<h2 style="color: #3273a8; font-weight: bold;" class="mbr-section-title mbr-fonts-style align-left pb-3 display-2">Сумма на счету</h2>
<br>      
<h3 class="mbr-section-subtitle mbr-fonts-style align-left pb-5 mbr-light display-5"><?php echo $summ ?></h3>

<br>
<br>


</div>
</section>

<script type="text/javascript">
$(document).ready(function(){
	$('#btn1').click(function(){ 
    var method = document.getElementById('method').value;
    var address = document.getElementById('address').value;
    var value = document.getElementById('value').value;
    var text = document.getElementById('text').value;
    
    console.log(method);
    console.log(address);
    console.log(value);
    console.log(text);
      $.ajax({
        url: 'updatepage4.php',
        type: 'post',
        dataType: 'json',
        data: {method: method, address: address, value: value, text: text},
        success: function(output_string){
                $('#result').empty();
                $('#result').append(output_string);
                console.log(1111111);
            }, // End of success function of ajax form
            error: function () {
              console.log(222222);
              $('#result').empty();
              $('#result').append('<div class="alert alert-danger" role="alert">Неверный данные для перевода.</div>');
      },
        }); 
        
    
	});
});
</script>
</body>
</html>