<?php
if (isset($_POST['login']))
{
    $sql = "SELECT * FROM users WHERE name=?s";
    $row = $db->getRow($sql, $_POST['auth_name']);
    if ($row && password_verify($_POST['auth_pass'], $row['pass'])) {
        $_SESSION['user_id'] = $row['id'];
    }
    header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    exit;
}

if (isset($_GET['action']) AND $_GET['action']=="logout") {
    session_start();
    session_destroy();
    header("Location: http://".$_SERVER['HTTP_HOST']."/");
    exit;
}
?>