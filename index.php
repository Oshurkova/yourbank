<?php
    session_start();
    $id = $_SESSION['id'];
    if (!$id) {
      header("location: login.php");
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
  
  <title>Home</title>
  
<link rel="canonical" href="./">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
 
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
  
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-sd86FCnxa1" layout="nodisplay" side="right">
    <div class="builder-sidebar" id="builder-sidebar">
      <button on="tap:sidebar.close" class="close-sidebar">
      <span></span>
      <span></span>
      </button>
    
      
        <!-- NAVBAR ITEMS -->
        <ul class="navbar-nav nav-dropdown mbr-column" data-app-modern-menu="true"><li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page3.php">Переводы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page4.php">Платежи</a>
          </li><li class="nav-item"><a class="nav-link link text-primary display-7" href="page2.php">Баланс</a></li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md mbr-bold btn-white display-7" href="logout.php">Выйти</a></div>
        <!-- SHOW BUTTON END -->
      </div>
  </amp-sidebar>
  
  <section class="menu horizontal-menu cid-sd86FCnxa1" id="menu1-0">
    
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
            <a class="nav-link link text-primary display-7" href="page3.php">Переводы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-primary display-7" href="page4.php">Платежи</a>
          </li><li class="nav-item"><a class="nav-link link text-primary display-7" href="page2.php">Баланс</a></li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-md mbr-bold btn-white display-7" href="index.php">Выйти</a></div>
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

<section class="content17 mbr-section cid-sd8cH5grT8" id="content17-3">

    
    
    <div class="container mbr-px-5">
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-white mbr-pt-1 mbr-pb-2 display-5"><?php print_r($_SESSION, TRUE) ?></h3>
                <p class="mbr-text mbr-fonts-style align-left mbr-white mbr-py-1 display-4">С банком YourBank ваши финансы всегда под защитой нашей системы безопасности</p>             
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 md-pb">
                <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-white mbr-pt-1 mbr-pb-2 display-5">Доступность</h3>
                <p class="mbr-text mbr-fonts-style align-left mbr-white mbr-py-1 display-4">Информация доступна нашим клиентам в любое время, узнайте информацию о счёте или свяжитесь со специалистом</p> 
            </div>
        
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3">
                <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-white mbr-pt-1 mbr-pb-2 display-5">Скорость</h3>
                <p class="mbr-text mbr-fonts-style align-left mbr-white mbr-py-1 display-4">Мы решим все ваши вопросы в кратчайшие сроки и поможем вам сразу же в момент обращения&nbsp;</p>
            </div>
        
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-3 last-child">
                <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-white mbr-pt-1 mbr-pb-2 display-5">Современность</h3>
                <p class="mbr-text mbr-fonts-style align-left mbr-white mbr-py-1 display-4">Мы используем новейшие технологии для работы с клиентами и их финансами.</p>
            </div>
        </div>
    </div>
</section>

<section class="contacts2 cid-sd8cTy0MyT" id="contacts2-4">

    

    <div class="container">
        <h2 class="align-center mbr-fonts-style mbr-light display-2">Свяжитесь со специалистом</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light mbr-pb-3 mbr-pt-1 display-5">Оставьте свои контактные данные и сотрудник банка решит все ваши вопросы</h3>

        <div class="mbr-row mbr-jc-c mbr-pt-4">
            <div class="mbr-col-lg-7 mbr-col-md-10 mbr-col-sm-12" data-form-type="formoid">
                <form class="mbr-form" method="post" target="_top" action-xhr="https://formoid.net/api/amp-form/push" data-form-title="Mobirise Form" id="myFormcontacts24" on="submit:myFormcontacts24.clear;submit-success:AMP.setState({myStatecontacts24:{formdata11contacts24:{stateformdata11contacts24: '', valueformdata11contacts24: ''}, formdata21contacts24:{stateformdata21contacts24: '', valueformdata21contacts24: ''}, formdata01contacts24:{stateformdata01contacts24: '', valueformdata01contacts24: ''}, formdata31contacts24:{stateformdata31contacts24: '', valueformdata31contacts24: ''}}});submit-error:AMP.setState({myStatecontacts24:{formdata11contacts24:{stateformdata11contacts24: myStatecontacts24.formdata11contacts24.valueformdata11contacts24}, formdata21contacts24:{stateformdata21contacts24: myStatecontacts24.formdata21contacts24.valueformdata21contacts24}, formdata01contacts24:{stateformdata01contacts24: myStatecontacts24.formdata01contacts24.valueformdata01contacts24}, formdata31contacts24:{stateformdata31contacts24: myStatecontacts24.formdata31contacts24.valueformdata31contacts24}}})"><amp-state id="myStatecontacts24"><script type="application/json"> {"formdata11contacts24":{ "stateformdata11contacts24": "", "valueformdata11contacts24": ""},"formdata21contacts24":{ "stateformdata21contacts24": "", "valueformdata21contacts24": ""},"formdata01contacts24":{ "stateformdata01contacts24": "", "valueformdata01contacts24": ""},"formdata31contacts24":{ "stateformdata31contacts24": "", "valueformdata31contacts24": ""}}</script></amp-state><input type="hidden" name="email" data-form-email="true" value="oL3Qmqmy8WiOPPlzvDdp6OZTqynlHm+LFBviHmadINRGp4dg755hsJGA9bYEjAAvkT9xMrX5OpxbzQVR7rriBtFnujXqgkgeTMJVgvIOYQavdzcg6rjfvF1OkPc1MTb9">
                    <div class="mbr-form-row">
                      <div submit-success="" class="mbr-col-sm-12 mbr-col-md-12">
                          <template data-form-alert="" type="amp-mustache">Мы свяжемся с вами в ближайшее время!</template>
                      </div>
                      <div submit-error="" class="mbr-col-sm-12 mbr-col-md-12">
                          <template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
                      </div>
                    </div>
                    <div class="mbr-form-row">
                        <div class="field mbr-col-sm-12 mbr-col" data-for="form[data][1][1]">
                            <input type="hidden" name="form[data][0][0]" value="Name" id="form[data][1][0]-contacts2-4" data-form-field="">
                            <input [value]="myStatecontacts24.formdata11contacts24.stateformdata11contacts24" on="change:AMP.setState({myStatecontacts24:{formdata11contacts24:{valueformdata11contacts24: event.value}}})" class="field-input display-4" type="text" name="form[data][0][1]" data-form-field="Name" placeholder="ФИО" required="" id="form[data][1][1]-contacts2-4">
                        </div>
                        <div class="field mbr-col-sm-12 mbr-col" data-for="form[data][2][1]">
                            <input type="hidden" name="form[data][1][0]" value="Phone" id="form[data][2][0]-contacts2-4" data-form-field="">
                            <input [value]="myStatecontacts24.formdata21contacts24.stateformdata21contacts24" on="change:AMP.setState({myStatecontacts24:{formdata21contacts24:{valueformdata21contacts24: event.value}}})" class="field-input display-4" type="tel" placeholder="Телефона" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" data-form-field="Phone" name="form[data][1][1]" required="" id="form[data][2][1]-contacts2-4">
                        </div>
                        <div class="field mbr-col-sm-12 mbr-col" data-for="form[data][0][1]">
                            <input type="hidden" name="form[data][2][0]" value="Email" id="form[data][0][0]-contacts2-4" data-form-field="">
                            <input [value]="myStatecontacts24.formdata01contacts24.stateformdata01contacts24" on="change:AMP.setState({myStatecontacts24:{formdata01contacts24:{valueformdata01contacts24: event.value}}})" class="field-input display-4" type="email" name="form[data][2][1]" data-form-field="Email" placeholder="Электронная почта" required="" id="form[data][0][1]-contacts2-4">
                        </div>
                        <div class="area field mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12" data-for="form[data][3][1]">
                            <input type="hidden" name="form[data][3][0]" value="Message" id="form[data][3][0]-contacts2-4" data-form-field="">
                            <textarea on="change:AMP.setState({myStatecontacts24:{formdata31contacts24:{valueformdata31contacts24: event.value}}})" [defaulttext]="myStatecontacts24.formdata31contacts24.stateformdata31contacts24" class="field-input display-4" name="form[data][3][1]" rows="7" data-form-field="Message" placeholder="Ваш вопрос" id="form[data][3][1]-contacts2-4"></textarea>
                        </div>
                        <div class="mbr-section-btn mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12 align-center"><button type="submit" class="btn btn-primary btn-form display-4">Отправить</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/e" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Web page <a href="https://mobirise.site/f" style="color:#aaa;">was built</a> with Mobirise</p></section>
  
  
</body>
</html>