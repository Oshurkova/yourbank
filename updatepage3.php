<?php
    session_start();
    $bdate = $_POST['bdate'];
    $edate = $_POST['edate'];
    if (($bdate != "") && ($edate != "")) {
        $conn = new mysqli('localhost', 'root', '', 'yourbank');
        $sql = "SELECT date, debit, credit, value from entry";
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
        $sql = "SELECT date, debit, credit, value from entry";
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
