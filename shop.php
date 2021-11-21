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
  <div class="container">
    <div class="row" style="min-height: 25px;"></div>

    <!-- Az első sornyi termék amit eladunk -->
    <div class="row">
     
    
         <div class="col-3">
                <div class="card">
                    <img src="img/tempcoin.jpg" alt="#" style="min-height: 25vh; max-height: 25vh ;">
                    <div class="card-body">
                        <div style="min-height: 20vh; max-height: 20vh;"  >    
                            <h5 class="card-title"></h5>
                            <p class="blockquote">500  insert currency name </p>
                            <p class="blockquote-footer">Buy 500 insert currency name  here for only 5$ and get 30 insert currency name extra</p>
                        </div>
                        <form action="includes/kosar.php" method="POST">
                            <div class="input-group">
                                <input type="number" name="darabszam" id="darabszam_input" class="form-control" value="1">
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
                        <div style="min-height: 20vh; max-height: 20vh;"  >    
                            <h5 class="card-title"></h5>
                            <p class="blockquote">1000  insert currency name </p>
                            <p class="blockquote-footer">Buy 1000 insert currency name  here for only 10$ and get 150 insert currency name extra</p>
                        </div>
                        <form action="includes/kosar.php" method="POST">
                            <div class="input-group">
                                <input type="number" name="darabszam" id="darabszam_input" class="form-control" value="1">
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
                        <div style="min-height: 20vh; max-height: 20vh;"  >    
                            <h5 class="card-title"></h5>
                            <p class="blockquote">2000  insert currency name </p>
                            <p class="blockquote-footer">Buy 2000 insert currency name  here for only 20$ and get 500 insert currency name extra</p>
                        </div>
                        <form action="includes/kosar.php" method="POST">
                            <div class="input-group">
                                <input type="number" name="darabszam" id="darabszam_input" class="form-control" value="1">
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
                        <div style="min-height: 20vh; max-height: 20vh;"  >    
                            <h5 class="card-title"></h5>
                            <p class="blockquote">5000  insert currency name </p>
                            <p class="blockquote-footer">Buy 5000 insert currency name  here for only 50$ and get 1500 insert currency name extra</p>
                        </div>
                        <form action="includes/kosar.php" method="POST">
                            <div class="input-group">
                                <input type="number" name="darabszam" id="darabszam_input" class="form-control" value="1">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i></button>
                                <input type="hidden" name="termekID" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div> <!-- Első sor vége -->
  </div>
</body>

</html>