<?php
    session_start(); 

    if($_SERVER['REQUEST_METHOD'] == "GET") {
        $mysqli = new mysqli('localhost', 'root', '', 'yourbank');
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $sqll = "DELETE FROM clientpersone WHERE id='$id'";
        $mysqli->query($sql);
        $mysqli->query($sqll);
        header("location:page1.php");
    }
 
?>