<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
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
    Change Password
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
        <div class=" col-md-3 px-0">
          <?php include 'profile-menu.php'; ?>
        </div>
        <?php
        $msg = $passerr = "";
        if (isset($_POST['b1'])) {
          $opwd=$_POST["opwd"];
          $npwd = $_POST["npwd"];
          $cpwd = $_POST["cpwd"];

          $qs="SELECT * FROM register WHERE upass='$opwd' AND uid=".$id;
          $rs=mysqli_query($cn,$qs);

          $count=mysqli_num_rows($rs);
          // echo $count;
          if($count==1)
          {
          if ($npwd == $cpwd) {
            $update = "UPDATE register SET upass='$npwd' WHERE uid=" . $id;

            if (mysqli_query($cn, $update)) {
              echo "<script>alert('Password Updated')</script>";
            } else {
              echo "<script>alert('Password Updation Failed')</script>";
            }
          } else {
            $passerr = "Password Dose Not Match";
          }
        }
        else
        {
            $msg="Invalid Credtials";
        }
        }
        ?>
        <div class="col-md-9 px-0 py-3">
          <h2 class="text-center">Change Password</h2>
          <hr>
          <form action="change-password.php" method="post">

          <div class="mt-3">
              <label for="">Old Password</label>
              <span class="text-danger"> <?php echo $msg; ?></span>
              <input type="password" placeholder="Old Password" name="opwd" class="form-control mb-3" required>
            </div>

            <div class="mt-2">
              <label>New Password</label>
              <span class="text-danger"> <?php echo $passerr; ?></span>
              <input type="password" placeholder="Password" name="npwd" required />
            </div>

            <div class="mt-2">
              <label>Confirm Password</label>
              <input type="password" placeholder="Confirm Password" name="cpwd" required />
            </div>


            <div class="d-flex mt-2">
              <input type="submit" value="Change Password" name="b1" class="btn btn-primary">


            </div>

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