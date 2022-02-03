<?php

session_start();

if (isset($_POST['submit'])) {
    require_once 'database.php';
    $username=mysqli_real_escape_string($connection,$_POST['username']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    if (empty($username) || empty($password)) {
        header("Location: ../leaderboard.php?error=emptyFields");
    }
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE userName = '$username' && userPassword = '$password';";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;      
        
        header("Location: ../leaderboard.php?login=ok");
    }
    else {
        echo 'error';
        //header("Location: ../leaderboard.php?login=bitsus");
    }
}
else {
    echo'error';
}