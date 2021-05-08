<?php
    $dbServer = 'localhost';
    $dbName = 'loginsystem';
    $dbUsername = 'root';
    $dbPassword = 'admin';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    $query = "SELECT * FROM `profile` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($db, $query);
    $value = mysqli_fetch_all($result);

    # print_r($value);

    if ( !empty($username) && !empty($password) ) {
        if ( !empty($value) ) {
            echo "歡迎回來" . $value[0][1];
        }
        /*
        else if ($username == "polar" && $password == "bear") {
            echo "歡迎回來" . "北極熊";
        }
        */
        else {
            echo "請重新再試";
        }
    }
    else {
        echo "帳號或密碼不能為空！";
    }
?>