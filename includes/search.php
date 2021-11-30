<?php
require_once("database.php");
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
}
