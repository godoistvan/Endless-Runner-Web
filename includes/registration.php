<?php

if (isset($_POST["submit"])) {

    require_once "database.php";

    //SQL injection elleni védekezése
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $confirm = mysqli_real_escape_string($connection, $_POST["password1"]);
    $accepted=mysqli_real_escape_string($connection,$sql["accepted"]);
    if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
        header("Location: ../index.php?error=emptyFields");
        exit;
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        header("Location: ../index.php?error=wrongEmailFormat");
        exit;
    } else if ($password !== $confirm) {
        header("Location: ../index.php?error=passwordsDontMatch");
        exit;
    } 
    elseif (empty($accepted)) {
        header("Location: ../index.php?error=TOSnotaccepted");
        exit;
    }
    else {
        $password = md5($confirm);

        $sql = "INSERT INTO users (userName, userEmail, userPassword) 
        VALUES ('$username', '$email', '$password');";

        mysqli_query($connection, $sql);
        header("Location: ../index.php?registration=success");
    }
}

