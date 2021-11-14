<?php

if (isset($_POST['submit'])) {
    require_once 'database.php';
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $password1 = mysqli_real_escape_string($connection, $_POST["password1"]);
    $accepted = mysqli_real_escape_string($connection, $_POST["accepted"]);
    if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
        header("Location: ../index.php?error=emptyFields");
        exit;
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        header("Location: ../index.php?error=wrongEmailFormat");
        exit;
    } else if ($password !== $password1) {
        header("Location: ../index.php?error=passwordsDontMatch");
        exit;
    } else if (empty($accepted)) {
        header("Location:../index.php?error=termsofservicenotaccepted");
    }
    else {
        $password=md5($password1);
        $stmt =$connection->prepare("INSERT INTO users (usersName, usersEmail, usersPassword) 
        VALUES (?,?,?);");
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();
        header("Location: ../index.php?registration=success");
    }
}
