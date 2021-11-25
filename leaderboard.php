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
    $sql="SELECT `userName`,`userHighscore`, `userRank`, `userElo` FROM `users` WHERE 1";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
      echo '<table class="table col-md-7"><tr><th>Username</th><th>UserHighscore</th><th>UserRank</th><th>UserElo</th></tr>';
      // output data of each row
      while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["userHighscore"] . " </td><td>" . $row["userRank"] . "</td><td>" . $row["userElo"] . "</tr>";
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
    ?>
</body>
</html>