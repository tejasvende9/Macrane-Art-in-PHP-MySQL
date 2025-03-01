<?php
include 'connection.php';
$nm = $em = $mob = $pwd = $msg = " ";
if (isset($_POST["b1"])) {
  $em = $_POST['email'];
  $pwd = $_POST['password'];

  $q = "SELECT * FROM register WHERE uemail='$em' AND upass='$pwd'";
  // echo $q;

  $rs = mysqli_query($cn, $q);
  $num = mysqli_num_rows($rs);
  if ($num == 1) {
    session_start();
    $data = mysqli_fetch_assoc($rs);
    $_SESSION['id'] = $data['uid'];

    header('location:profile.php');
    // var_dump($data);
  } else {
    $msg = "Invalid Username or Password";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    User Login
</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <!-- header section strats -->
  <?php include 'header.php';?>
    <!-- end header section -->
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class=" col-md-5 px-0">
          
                <img src="images/key holder4.jpg" alt="" class=""
                width="80%">
       
        </div>
        <div class="col-md-7 px-0 py-3">
            <h2 class="text-center">Login Here..</h2>
            <hr>
          
           
          <form action="login.php" method="post">
         
            
            
            <div>
            <label>Email</label>
              <input type="email" placeholder="Email" name="email" required />
            </div>

            <div>
            <label>Password</label>
              <input type="password" placeholder="Password" name="password" required />
            </div>
           
            <div class="d-flex ">
              <input type="submit" value="Login" name="b1" onclick="alert('Login Successfully')"
              class="btn btn-primary">

              
            </div>
            <p class="text-center">

            <a href="register.php" class="text-danger">Create New Account ?</a>
              <a href="forgot-password.php">Forgot-password</a>

              </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  
  <!-- footer section start -->

  <?php include 'footer.php';?>

  <!-- footer  section Start -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>