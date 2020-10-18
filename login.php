<?php
    session_start();
?>
<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
    <title>Login Page</title>
    <link rel="shortcut icon" href="assets/images/logo1.png" type="image/x-icon">
  </head>
  <body>
    <h3 class="text-muted" style="line-height: 36px; text-align: center;">Login page</h3>
      <div style="text-align: center;" class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <form action="checklogin.php" method="post">
            <div class="form-group">
              <label>Login</label>
              <input type="text" name="login" class="form-control" required="required">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required="required">
            </div>
            <button class="btn btn-primary">Log in</button>           
          </form>
        </div>
      </div>
    <footer class="footer">
      <div>© YourBank 2020</div>
    </footer>
  </body>
</html>