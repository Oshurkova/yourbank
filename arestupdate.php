<?php

    $output_string = '<div class="alert alert-danger" role="alert">Ошибка блокировки.</div>';

    $method = intval($_POST['method']);
    $account = intval($_POST['idcl']);
    $conn = new mysqli('localhost', 'root', '', 'yourbank');
    if ($method == 1) {
        $sql = "UPDATE clientpersone SET arest = 1 WHERE ACCOUNT = $account";

    } else {

    
    $sql = "UPDATE clientpersone SET arest = 0 WHERE ACCOUNT = $account";
    }
    if (($conn->query($sql) === TRUE) && ($method == 1)) {
        $output_string = '<div class="alert alert-success" role="alert">Блокировка успешно выполнена.</div>';
    } 
    if (($conn->query($sql) === TRUE) && ($method == 2)) {
        $output_string = '<div class="alert alert-success" role="alert">Арест успешно снят.</div>';
    } 

echo json_encode($output_string);
?>