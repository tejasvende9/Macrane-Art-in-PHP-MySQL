<?php session_start();
$email = $_SESSION['email'];
include 'connection.php';
$npwd = $cpwd = $msg = "";
if (isset($_POST['b1'])) {
    $npwd = $_POST['npwd'];
    $cpwd = $_POST['cpwd'];
    if ($npwd == $cpwd) {
        $qU = "UPDATE register SET upass ='$npwd' WHERE uemail = '$email'";
        if (mysqli_query($cn, $qU)) {
            echo "<script>
                    alert('Password Reset Successfully')
                    window.location.href='index.php'</script>";
        } else {
            $msg = "Failed To Update";
        }
    } else {
        $msg = "Password Does Not Match";
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
  Reset Password
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
            <h2 class="text-center">Reset Password</h2>
            <hr>
          <form action="reset-password.php" method="post">
         
            
         

            <div>
            <label>New Password</label>
              <input type="password" placeholder="Password" name="npwd" required />
            </div>
            
            <div>
            <label>Confirm Password</label>
              <input type="password" placeholder="Password" name="cpwd" required />
            </div>
            
           


            

           
            <div class="d-flex ">
              <input type="submit" value="Reset Password" name="b1"
              class="btn btn-primary" onclick="alert('Reset Password Successfully')">

              
            </div>
            <p class="text-center">

              <a href="login.php">Back</a>

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