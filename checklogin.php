<?php
    session_start();
    $login = $_POST['login'];
    $password = $_POST['password'];
    $mysqli = new mysqli("localhost:3308", "root", "", "yourbank");
    $query = "SELECT id, login, password, type FROM users WHERE login = $login";
    $table_id = "";
    $table_users = "";
    $table_password = "";
    $table_type = "";
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table_id = $row['id'];
            $table_users = $row['login']; 
            $table_password = $row['password']; 
            $table_type = $row['type'];
        }
        
        if(($login == $table_users) && ($password == $table_password) && ($table_type == 1)) {
            $_SESSION['id'] = $table_id; 
            header("location: indexadmin.php"); 
        }
        if(($login == $table_users) && ($password == $table_password) && ($table_type == 2)) {
            $_SESSION['id'] = $table_id; 
            header("location: index.html");
	    }
	    else {
            if (($password != $table_password) && ($login == $table_users)) {
                Print '<script>alert("Неверный пароль");</script>'; 
                Print '<script>window.location.assign("login.php");</script>';	
            }
            if (($password != $table_password) && ($login != $table_users)) {
                Print '<script>alert("Неверные данные");</script>'; 
                Print '<script>window.location.assign("login.php");</script>';
            }
        }
    }
?>