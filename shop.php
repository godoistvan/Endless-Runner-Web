<?php
require_once 'includes/navbarheader.php';
$connection = mysqli_connect('localhost', 'root', '', 'endlessrunner1');
$sql = "SELECT * FROM items;";
$result = mysqli_query($connection, $sql);
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
  <div class="container">
    <div class="row" style="min-height: 25px;"></div>


    <div class="row">


      <div class="col-3">
        <div class="card">
          <img src="img/tempcoin.jpg" alt="#" style="min-height: 25vh; max-height: 25vh ;">
          <div class="card-body">
            <div style="min-height: 20vh; max-height: 20vh;">
              <h5 class="card-title"></h5>
              <p class="blockquote">500 insert currency name </p>
              <p class="blockquote-footer">Buy 500 insert currency name here for only 5$ and get 30 insert currency name extra</p>
            </div>
            <form action="includes/kosar.php" method="POST">
              <div class="input-group">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                <input type="hidden" name="termekID" value="">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img src="img/tempcoin.jpg" alt="#" style="min-height: 25vh; max-height: 25vh ;">
          <div class="card-body">
            <div style="min-height: 20vh; max-height: 20vh;">
              <h5 class="card-title"></h5>
              <p class="blockquote">1000 insert currency name </p>
              <p class="blockquote-footer">Buy 1000 insert currency name here for only 10$ and get 150 insert currency name extra</p>
            </div>
            <form action="includes/kosar.php" method="POST">
              <div class="input-group">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                <input type="hidden" name="termekID" value="">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img src="img/tempcoin.jpg" alt="#" style="min-height: 25vh; max-height: 25vh ;">
          <div class="card-body">
            <div style="min-height: 20vh; max-height: 20vh;">
              <h5 class="card-title"></h5>
              <p class="blockquote">2000 insert currency name </p>
              <p class="blockquote-footer">Buy 2000 insert currency name here for only 20$ and get 500 insert currency name extra</p>
            </div>
            <form action="includes/kosar.php" method="POST">
              <div class="input-group">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                <input type="hidden" name="termekID" value="">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <img src="img/tempcoin.jpg" alt="#" style="min-height: 25vh; max-height: 25vh ;">
          <div class="card-body">
            <div style="min-height: 20vh; max-height: 20vh;">
              <h5 class="card-title"></h5>
              <p class="blockquote">5000 insert currency name </p>
              <p class="blockquote-footer">Buy 5000 insert currency name here for only 50$ and get 1500 insert currency name extra</p>
            </div>
            <form action="includes/kosar.php" method="POST">
              <div class="input-group">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                <input type="hidden" name="termekID" value="">
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12" style="text-align:center">
        <h1>Weekly deals</h1>
      </div>
      <div class="row">
        <?php
        $valami = 2;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['onsale'] == 1) {
            echo '<div class="col-3">
                    <div class="card">
                        <img src="img/' . $row['img'] . '" alt="#" style="min-height: 40vh; max-height: 40vh;">
                        <div class="card-body" style="min-height: 25vh; max-height: 25vh;">
                            <h5 class="card-title">' . $row['name'] . '</h5>
                            <p class="blockquote">' . $row['description'] . '</p>
                            <p class="blockquote-footer">' . $row['price'] / $valami . ' Ecoin 50% off!</p>
                            <form action="includes/kosar.php" method="POST">
                                <div class="input-group">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                                    <input type="hidden" name="termekID" value="' . $row['id'] . '">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
          }
        }
        ?>

      </div>
      <div class="row">
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Név</th>
            <th>Törlés</th>
        </thead>
        <tbody>

            <?php

            $osszesen = 0;
            if (isset($_SESSION['kosar'])) {

                foreach ($_SESSION['kosar'] as $key => $value) {
                  var_dump($key);
                    $sql2 = "SELECT * FROM items WHERE id = 2";
                    $result2 = mysqli_query($connection, $sql2);
                    $ertekek = mysqli_fetch_assoc($result2);
                    var_dump($sql2);
                    var_dump($result2);
                    var_dump($ertekek);
                    $osszesen += $value * $ertekek['price']/2;

                    echo ' <tr>
                        <td>' . $ertekek['id'] . '</td>
                        <td>' . $ertekek['name'] . '</td>
                        <form action="includes/torles.php" method="POST">
                            <td><button class="btn btn-danger" name="submit" type="submit">Törlés</button></td>
                            <input type="hidden" value="' . $key . '" name="productID">
                        </form>
                    </tr>';
                }
            } else {
                echo '<tr>
                        <td>#</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
            }
            ?>

        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Végösszeg: </td>
                <td><?php echo number_format($osszesen, 0, '.', ' ') . 'eCoin'; ?></td>
        </tfoot>
    </table>
    </div>
</body>

</html>