<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<title>Endless Runner</title>
</head>
<body>
<section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="includes/registration.php" method="POST">

                <div class="form-outline mb-4">
                  <input type="text"  name="username" class="form-control form-control-lg" placeholder="Enter your username" required/>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="email"  name="email" class="form-control form-control-lg"placeholder="Enter your Email" required/>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  name="password" class="form-control form-control-lg" placeholder="Enter your password" required/>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  name="password1"class="form-control form-control-lg" placeholder="Repeat your password" required/>
                  
                </div>

                <div class="form-check d-flex justify mb-5">
                <input class="form-check-input me-2" type="checkbox" value="" name="accepted" required/>
                  <label class="form-check-label content-center" for="form2Example3g">
                    I agree to the <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"  name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<?php
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $password1 = $_POST['password1'];
        if ($password != $password1) {
            echo '<script>alert("The passwords doesnt match")</script>';
        }
        if ($password == $password1) {
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter and one number';
            }else{
                echo 'Strong password.';
            }
        }
    }

    ?>
</html>