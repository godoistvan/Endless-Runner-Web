<?php

session_start();
$termekID = $_POST['termekID'];
$darabSzam = 1;

// Sess Tömb NÉV  A TÖMB INDEX  INDEX ÉRTÉKET
$_SESSION['kosar'][$termekID] += $darabSzam;
header("location:../shop.php?itemAdded=true");