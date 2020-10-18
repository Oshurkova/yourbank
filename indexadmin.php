<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1-121x119.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<section class="menu cid-sdc9IJYSgP" once="menu" id="menu2-1">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="assets/images/logo1-121x119.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>        
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black text-primary display-4" href="page1.php">
                        Клиенты</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="indexadmin.php">Добавить клиента</a></div>
        </div>
    </nav>
</section>
<section class="features1 cid-sdcaqmTLmz" id="features1-6">
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mobi-mbri-key mobi-mbri"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Внимание</h4>
                    <p class="mbr-text mbr-fonts-style display-7">После добавления клиента, ему необходимо сообщить данные для авторизации</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="header15 cid-sdcarEhGZR mbr-fullscreen" id="header15-7">
    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">ДОБАВЛЕНИЕ НОВОГО КЛИЕНТА</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">ПП</p>
            </div>
            
                        <!---Formbuilder Form--->
                        <form action="indexadmin.php" method="POST" class="mbr-form form-with-styler" >
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="name">
                                    <input name="fio" placeholder="ФИО" data-form-field="Name" required="required" class="form-control px-3 display-7">
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input name="login" placeholder="Логин" required="required" class="form-control px-3 display-7">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input name="password" placeholder="Пароль" data-form-field="Phone" class="form-control px-3 display-7">
                                </div>
                                <div data-for="message" class="col-md-12 form-group ">
                                    <input name="account" placeholder="Счёт" data-form-field="Message" class="form-control px-3 display-7"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn"><button class="btn btn-form btn-success display-4">СОЗДАТЬ</button></div>
                            </div>
                        </form><!---Formbuilder Form--->
                    
        </div>
    </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $account = $_POST['account'];

    $mysqli = new mysqli("localhost:3308", "root", "", "yourbank");

    if ($mysqli->connect_errno) {
        echo $errorsql . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    /*echo $mysqli->host_info . "\n";*/
    $sql = "INSERT INTO users (login, password, type) VALUES ('$login', '$password', '2')";
    if ($mysqli->query($sql) === TRUE) {
        echo ' ';
    } else {
        echo $error . $sql . "<br>" . $mysqli->error;
    }
    $date = date("Y-m-d");  
    $sql = "INSERT INTO clientpersone (fio, account, createdate) VALUES ('$fio', '$account', '$date')";
    if ($mysqli->query($sql) === TRUE) {
        echo ' ';
    } else {
        echo $error . $sql . "<br>" . $mysqli->error;
    }
}
?>