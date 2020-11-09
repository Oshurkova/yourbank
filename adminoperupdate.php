<?php
    session_start();
    $id = intval($_POST['idcl']);
    $method = intval($_POST['method']);
    $value = intval($_POST['value']);
    $conn = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT account, summ from clientpersone where id = $id";
    $table_account = 0;
    $summ = 0;
    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table_account = $row['account']; 
            $summ = $row['summ']; 
        }
    }
    $output_string = '<div class="alert alert-danger" role="alert">Неверный данные для перевода.</div>';
    if ($method == 2) {
    $address = intval($_POST['address']);
    $query = "SELECT account from clientpersone WHERE ACCOUNT = $address";
    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $check = $row['account'];
        }
        
        if (($check == $address) && ($summ >= $value)) {
            $date = date("Y-m-d"); 
            $sql = "UPDATE clientpersone SET SUMM = SUMM + $value WHERE ACCOUNT = $address";
            $sqll = "UPDATE clientpersone SET SUMM = SUMM - $value WHERE id = $id";
            $sqlll = "INSERT INTO entry (date, debit, credit, value, type, id) VALUES ('$date', '$table_account', '$address', '$value', 1, $id)";   

            if (($conn->query($sql) === TRUE) && ($conn->query($sqll) === TRUE) && ($conn->query($sqlll) === TRUE)) {
                $output_string = '<div class="alert alert-success" role="alert">Перевод успешно выполнен.</div>';
            } 
        } 
    }
}
if ($method == 1) {
    $address = $_POST['address'];
    $date = date("Y-m-d"); 
    $query = "SELECT phone, account from clientpersone WHERE PHONE = $address";
    $table_credit = 0;
    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $check = $row['phone'];
            $table_credit = $row['account'];
        }
        
        if (($check == $address) && ($summ >= $value)) {
            $sql = "UPDATE clientpersone SET SUMM = SUMM + $value WHERE PHONE = $address";
            $sqll = "UPDATE clientpersone SET SUMM = SUMM - $value WHERE id = $id";
            $sqlll = "INSERT INTO entry (date, debit, credit, value, type, id) VALUES ('$date', '$table_account', '$table_credit', '$value', 1, $id)";   
            if (($conn->query($sql) === TRUE) && ($conn->query($sqll) === TRUE) && ($conn->query($sqlll) === TRUE) ) {
                $output_string = '<div class="alert alert-success" role="alert">Перевод успешно выполнен.</div>';
            } 
        } 
    }
}

echo json_encode($output_string);
    

?>
