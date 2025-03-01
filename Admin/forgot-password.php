<?php include 'connection.php'; 
    $email = $que = $ans = $msg = "";
    if (isset($_POST["b1"])) {
        $email = $_POST["uem"];
        $que = $_POST["uque"];
        $ans = $_POST["uans"];
        $q = "SELECT * FROM admin WHERE aemail = '$email' AND aque ='$que' AND aans='$ans'";
        //echo $q;
        $rs = mysqli_query($cn, $q);
        $count = mysqli_num_rows($rs);
        $data = mysqli_fetch_assoc($rs);
        if ($count == 1) {
            session_start();
            $_SESSION['email'] = $data['aemail'];
            //echo $_SESSION['email'];
            header('location:reset_password.php');
        } else {
            $msg = "Invalid Credentials";
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
    Forgot Password
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

  <section class="contact_section mb-3 ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class=" col-md-5 px-0">
          
                <img src="images/key holder5.jpg" alt="" class=""
                width="80%">
       
        </div>
        <div class="col-md-7 px-0 py-3">
            <h2 class="text-center">Forgot Password</h2>
            <hr>
            <span class="text-danger"><?php echo $msg;?></span>
          <form action="forgot-password.php" method="post">
            
            <div>
            <label>Email</label>
              <input type="email" placeholder="Email" name="uem" required />
            </div>
            <div>
            <label>Select Security Quetion</label>
            <select name="uque" class="form-control">
                <option value="What is your hobby">What is your hobby?</option>
                <option value="What is your school Name">What is your school Name?</option>
                <option value="What is your favourite color">What is your favourite color?</option>
            </select>


        </div>

        <div>
            <label>Your Answer</label>

              <input type="password" placeholder="Answer" name="uans"  required />
            </div>
           
           
            <div class="d-flex mt-3">
              <input type="submit" value="Submit" name="b1" class="btn btn-primary">
            </div>
            <div class="d-flex mt-3">
              <a href="index.php" class="btn btn-danger">Back</a>
            </div>
            
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