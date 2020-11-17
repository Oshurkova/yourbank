<?php
    session_start();
    $id = $_SESSION['id'];
    $bdate = $_POST['bdate'];
    $edate = $_POST['edate'];
    $conn = new mysqli('localhost', 'root', '', 'yourbank');
    $query = "SELECT account from clientpersone where id = $id";
    $table_account = 0;
    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table_account = $row['account']; 
        }
    }
    if (($bdate != "") && ($edate != "")) {
        $conn = new mysqli('localhost', 'root', '', 'yourbank');
        $sql = "SELECT date, debit, credit, value from entry where debit = $table_account or credit = $table_account";
        $result = $conn->query($sql);
        $output_string = '';
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {	
                            if (($row['date'] >= $bdate) && ($row['date'] <= $edate))  {
                            $output_string .= '<tr>';
                            $output_string .= '<td>'.$row['date'].'</td>';
                            $output_string .= '<td>'.$row['debit'].'</td>';
                            $output_string .= '<td>'.$row['credit'].'</td>';
                            $output_string .= '<td>'.$row['value'].'</td>';
                            $output_string .= '</tr>';
                        }
                    }
                }
        echo json_encode($output_string);
    } else {
        $conn = new mysqli('localhost', 'root', '', 'yourbank');
        $sql = "SELECT date, debit, credit, value from entry where debit = $table_account or credit = $table_account";
        $result = $conn->query($sql);
        $output_string = '';
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {	
                            $output_string .= '<tr>';
                            $output_string .= '<td>'.$row['date'].'</td>';
                            $output_string .= '<td>'.$row['debit'].'</td>';
                            $output_string .= '<td>'.$row['credit'].'</td>';
                            $output_string .= '<td>'.$row['value'].'</td>';
                            $output_string .= '</tr>';
                    }
                }
        echo json_encode($output_string);
    } 
?>
