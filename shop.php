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
  <title>Shop</title>
  <link rel="stylesheet" href="css/popup.css">
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
      <script type="text/javascript" src="js/popup.js"></script>
      <div class="popup" id="popup-1">
        <div class="overlay"> </div>
        <div class="content">
          <div class="close-btn" onclick="togglepopup()">&times;></div>
          <h1>Title</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit aut, adipisci mollitia ullam accusamus illum ex dolor molestias officiis, quae necessitatibus eos laboriosam labore velit autem in fuga ad optio, molestiae dolorum non facilis praesentium quaerat. Nulla blanditiis nostrum tempore! Porro corrupti illum quisquam soluta neque laudantium labore quos?</p>
        </div>
      </div>
      <button onclick="togglepopup()">Cucc</button>
    </div>
</body>

</html>
