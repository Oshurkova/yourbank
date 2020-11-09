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
  <meta name="description" content="Web Builder Description">
  
  
  <title>Clients</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu cid-sdc9IJYSgP" once="menu" id="menu2-8">

    

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
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php">Выйти</a></div>

        </div>
    </nav>
</section>
<section class="section-table cid-sdcbQgx3HQ" id="table1-9">
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Список клиентов</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">Для просмотра информации по клиенту выберите клиента в таблице</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Поиск:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" data-empty="No matching records found">
            <thead>
              <tr class="table-heads ">  
              <th class="head-item mbr-fonts-style display-7">
                      ФИО</th><th class="head-item mbr-fonts-style display-7">
                      СЧЁТ</th><th class="head-item mbr-fonts-style display-7">
                      ДАТА СОЗДАНИЯ</th><th class="head-item mbr-fonts-style display-7">
                      СУММА</th></tr>
            </thead>
            <tbody>
            <?php
                $conn = new mysqli('localhost', 'root', '', 'yourbank');
                $sql = "SELECT fio, account, createdate, summ from clientpersone";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {	
                        Print "<tr>";		
                        Print '<td class="body-item mbr-fonts-style display-7">'. $row['fio'] . "</td>";
                        Print '<td class="body-item mbr-fonts-style display-7">'. $row['account'] . "</td>";
                        Print '<td class="body-item mbr-fonts-style display-7">'. $row['createdate'] . "</td>";
                        Print '<td class="body-item mbr-fonts-style display-7">'. $row['summ'] . "</td>";
                        Print "</tr>";
                    }
				        }
            ?>
            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Отражено</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">записи</span>
                <span class="infoFilteredBefore">(фильтр на</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> записи)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/l" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/d" style="color:#aaa;"></a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/datatables/jquery.data-tables.min.js"></script>  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>  <script src="assets/theme/js/script.js"></script>  
</body>
</html>