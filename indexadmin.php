<?php
    session_start();
    $id = $_SESSION['id'];
    if (!$id) {
      header("location: login.php");
    } 
?>
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
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
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="adminoper.php">Операции</a></div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="arest.php">Арест</a></div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php">Выйти</a></div>
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
<section class="content15 mbr-section cid-sd8hf4vPmc" id="content15-b">
<div id='result'>

</div>
<div style="text-align: center;" class="row justify-content-center align-items-center h-100">
        
    
        <div class="container mbr-px-5">
<form>
<br>
<div class="form-group">
    <label for="exampleFormControlSelect1">Тип операции</label>
    <select id="method" class="form-control" id="exampleFormControlSelect1">
      <option value="1">Добавление клиента</option>
      <option value="2">Обновление данных клиента</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ФИО</label>
    <input id="fio" class="form-control" id="exampleFormControlInput1" placeholder="Фамилия Имя Отчество">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Имя пользователя</label>
    <input id="login" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Пароль</label>
    <input id="password" class="form-control" id="exampleFormControlInput1" placeholder="От 3 до 15 символов">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Счёт</label>
    <input type="number" oninput="validity.valid||(value='');" id="account" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Телефон</label>
    <input id="phone" class="form-control" id="exampleFormControlInput1" placeholder="9** *** ** **">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Сумма на счету</label>
    <input type="number" oninput="validity.valid||(value='');" id="summ" class="form-control" id="exampleFormControlInput1" placeholder="Сумма, которую внёс клиент на счёт">
  </div>
  
  
</form>
<button id="btn1" class="btn btn-primary">Создать клиента</button> 
</div>
</div>
</section>
    <script type="text/javascript">
$(document).ready(function(){
	$('#btn1').click(function(){ 
    var method = document.getElementById('method').value;
    var fio = document.getElementById('fio').value;
    var login = document.getElementById('login').value;
    var password = document.getElementById('password').value;
    var account = document.getElementById('account').value;
    var phone = document.getElementById('phone').value;
    var summ = document.getElementById('summ').value;
      $.ajax({
        url: 'updateadmin.php',
        type: 'post',
        dataType: 'json',
        data: {method: method, fio: fio, login: login, password: password, account: account, phone: phone, summ: summ},
        success: function(output_string){
                $('#result').empty();
                $('#result').append(output_string);
                console.log(1111111);
            }, // End of success function of ajax form
            error: function () {
              console.log(222222);
              $('#result').empty();
              $('#result').append('<div class="alert alert-danger" role="alert">Возникла ошибка при создании клиента.</div>');
      }
        }); 
        
    
	});
});
</script>
</body>
</html>
