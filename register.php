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
    User Registration
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
    <?php include 'header.php'; ?>
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

          <img src="images/key holder5.jpg" alt="" class="" width="80%">

        </div>
        <div class="col-md-7 px-0 py-3">
          <h2 class="text-center">Register With Us</h2>
          <hr>
          <?php
          include 'connection.php';
          if (isset($_POST["b1"])) {

            $unm = $_POST['unm'];
            $uem = $_POST['uem'];
            $upwd = $_POST['upwd'];
            $umob = $_POST['umob'];
            $uque = $_POST['uque'];
            $uans = $_POST['uans'];

            $qu = "INSERT INTO `register`(`unm`, `uemail`, `upass`, `umob`, `uque`, `uans`) VALUES ('$unm','$uem','$upwd',$umob,'$uque','$uans')";
            //echo $qu;
            if (mysqli_query($cn, $qu)) {
              echo "<script>
                                alert('Resgister Successfully');
                                window.location.href='login.php';
                            </script>";
            } else {
              echo "<script>
                        alert('Resgister Failed');
                       
                        </script>";
            }
          }

          ?>
          <form action="register.php" method="post">
            <div>
              <label>Name</label>
              <input type="text" placeholder="Name" name="unm" required />
            </div>
            <div>

              <div>
                <label>Email</label>
                <input type="email" placeholder="Email" name="uem" required />
              </div>

              <div>
                <label>Password</label>
                <input type="password" placeholder="Password" name="upwd" required />
              </div>

              <div>

                <div>
                  <label>Mobile No</label>

                  <input type="text" placeholder="Phone" name="umob" required />
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

                  <input type="password" placeholder="Answer" name="uans" required />
                </div>


                <div class="d-flex ">
                  <input type="submit" value="Register" name="b1"
                   onclick="alert('Registration Successfull')" class="btn btn-primary">
                </div>
                <p class="text-center">

                  <a href="login.php" class="text-danger">Already Have New Account ?</a>

                </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- footer section start -->

  <?php include 'footer.php'; ?>

  <!-- footer  section Start -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>