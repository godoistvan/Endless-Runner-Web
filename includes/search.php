<?php
require_once("includes/database.php");
if (isset($_POST["search"])) {
    $searched = mysqli_real_escape_string($connection, $_POST['searchplayer']);
    $sql="SELECT * FROM `users` WHERE `userName` ='$searched'";
    $result = mysqli_query($connection, $sql);
    echo $result;
}
