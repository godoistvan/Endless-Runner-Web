<?php
require_once 'includes/navbarheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
        
            <div class="row d-flex justify-content-center align-items-center h-50">
                <?php
                require_once("includes/database.php");
                echo '
                                    <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-body p-2">';
                
                if (isset($_POST["submit"])) 
                {
                    $searched=$_POST['searchplayer'];
                    $sql = "SELECT users.userName, userhighscore.highscore,achievableranks.rank,elo.elo FROM `users` 
                    INNER JOIN `userhighscore` ON `userhighscore`.`userid` = `users`.`userID`
                    INNER JOIN `elo` ON `elo`.`userid` = `users`.`userID`
                    INNER JOIN `ranks` ON `ranks`.`userid` = `users`.`userID`
                    INNER JOIN `achievableranks` ON `ranks`.`rankid` = `achievableranks`.`id`
                    WHERE users.userName='$searched'";
                    
                    $result = mysqli_query($connection, $sql);
                    if (mysqli_num_rows($result) == 1) {
                        echo '<table class="table col-md-7"><tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["highscore"] . " </td><td>" . $row["rank"] . "</td><td>" . $row["elo"] . "</tr>";
                        }
                    }
                    else{
                        echo "User not found";
                    }
                    echo '                        </div>
                                </div>
                            </div>';
                }
                ?>
</body>
</html>