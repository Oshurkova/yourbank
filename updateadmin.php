<?php

    
	$fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $summ = intval($_POST['summ']);
    $account = intval($_POST['account']);
    $method = intval($_POST['method']);
    if ($method == 1) {
        $output_string = '<div class="alert alert-danger" role="alert">Возникла ошибка при создании клиента.</div>';
    
    $check = 0;
    if (strlen($password) < 3    or strlen($password) > 15) { 
    
        $output_string = '<div class="alert alert-danger" role="alert">Слишком коротки пароль.</div>';
        $check = 1;
        }
    
    $mysqli = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT login, password FROM users WHERE login='$login'";
    $table_users = "";
    $table_password = "";
    
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output_string = '<div class="alert alert-danger" role="alert">Данный пользователь уже сущетсвует.</div>';
            $check = 1;
        }
    } 
    $mysqli = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT account FROM clientpersone WHERE account='$account'";
    
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output_string = '<div class="alert alert-danger" role="alert">Данный счёт уже сущетсвует.</div>';
            $check = 1;
        }
    } 
    
   
   
        /*echo $mysqli->host_info . "\n";*/
        $date = date("Y-m-d"); 
        if ($check == 0) {
            $sql = "INSERT INTO clientpersone (fio, account, createdate, summ, phone) VALUES ('$fio', '$account', '$date', '$summ', '$phone')";
            $sqll= "INSERT INTO users (login, password, type) VALUES ('$login', '$password', '2')";
            
            if (($mysqli->query($sql) === TRUE) && ($mysqli->query($sqll) === TRUE)) {
                $output_string = '<div class="alert alert-success" role="alert">Пользователь успешно создан.</div>';

            }
        }
    } else {
        $output_string = '<div class="alert alert-danger" role="alert">Данная функция находится в разработке.</div>';
    }
        

         
 


    

echo json_encode($output_string);
?>