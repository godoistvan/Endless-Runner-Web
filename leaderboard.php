<?php
require_once 'includes/navbarheader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                                    <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="card" style="border-radius: 5px;">
                                            <div class="card-body p-2">';
               echo'
               <form action="searchleaderboard.php" method="post">
               <input type="text" name="searchplayer" id="searchplayer" placeholder="Enter the name of a player" class="form-control form-control-lg">
               <a href="searchleaderboard.php"><button type="submit"  name="submit"class="btn btn-primary"  >Search</button></a>
               </form>';
                if (isset($_POST["submit"])) {
                    
                   
                    $sql = "SELECT `userName`,`userHighscore`, `userRank`, `userElo` FROM `users` WHERE `userName`='$searched';";
                    $result = mysqli_query($connection, $sql);
                    if (mysqli_num_rows($result) == 1) {
                        echo '<table class="table col-md-7"><tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["userHighscore"] . " </td><td>" . $row["userRank"] . "</td><td>" . $row["userElo"] . "</tr>";
                        }
                    }
                    echo '                        </div>
                                </div>
                            </div>';
                } else {
                    echo '    <div class="col-5 col-md-5 col-lg-5 col-xl-5">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-2">';
                    $sql = "SELECT users.userName, userhighscore.highscore,achievableranks.rank,elo.elo FROM `users` 
                    INNER JOIN `userhighscore` ON `userhighscore`.`userid` = `users`.`userID`
                    INNER JOIN `elo` ON `elo`.`userid` = `users`.`userID`
                    INNER JOIN `ranks` ON `ranks`.`userid` = `users`.`userID`
                    INNER JOIN `achievableranks` ON `ranks`.`rankid` = `achievableranks`.`id`
                    ORDER BY userhighscore.highscore DESC";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<table class="table col-md-7"><tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["highscore"] . " </td><td>" . $row["rank"] . "</td><td>" . $row["elo"] . "</tr>";
                        }
                        echo "</table>";
                        echo '                        </div>
                                </div>';
                    } else {
                        echo "0 results";
                    }
                }
                ?>


            </div>
        </div>
    </div>
</body>

</html>