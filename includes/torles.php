<?php

if (isset($_POST['submit'])) {

    session_start();

    $productIDtoDelete = $_POST['productID'];
    unset($_SESSION['kosar'][$productIDtoDelete]);
    header("Location: ../shop.php?delete=success");
}
