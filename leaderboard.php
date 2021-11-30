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

                            <?php
                            require_once("includes/database.php");
                            echo'    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                            <div class="container h-100">
                    
                                <div class="row d-flex justify-content-center align-items-center h-50">
                                    <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-body p-2">';
                            echo ' <form action="leaderboard.php" method="post">
                            <input type="text" name="searchplayer" id="searchplayer" placeholder="Enter the name of a player" class="form-control form-control-lg">
                            <button type="submit" class="btn btn-primary" name="search">Search</button>
                        </form>';
                            if (isset($_POST["search"])) {
                                $searched = mysqli_real_escape_string($connection, $_POST['searchplayer']);
                                $sql = "SELECT `userName`,`userHighscore`, `userRank`, `userElo` FROM `users` WHERE `userName`='$searched';";
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) == 1) {
                                    echo '<table class="table col-md-7"><tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["userHighscore"] . " </td><td>" . $row["userRank"] . "</td><td>" . $row["userElo"] . "</tr>";
                                        
                                    }
                                }
                                echo'                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                            }
                            else {
                                echo'    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                            <div class="container h-100">
                    
                                <div class="row d-flex justify-content-center align-items-center h-50">';
                                $sql = "SELECT `userName`,`userHighscore`, `userRank`, `userElo` FROM `users` WHERE 1";
                                $result = $connection->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    echo '<table class="table col-md-7"><tr><th>Name</th><th>Highscore</th><th>Rank</th><th>Elo</th></tr>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["userHighscore"] . " </td><td>" . $row["userRank"] . "</td><td>" . $row["userElo"] . "</tr>";
                                    }
                                    echo "</table>";
                                    echo'                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                                } 
                                else {
                                    echo "0 results";
                                }
                            }
                            ?>



</body>

</html>