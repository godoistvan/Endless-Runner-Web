<?php
require_once'includes/header.php';
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
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login to your account </h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text"  name="username"class="form-control form-control-lg" placeholder="Enter your username" />
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  name="password" class="form-control form-control-lg" placeholder="Enter your password" />
                  
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"  name="submit"class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>