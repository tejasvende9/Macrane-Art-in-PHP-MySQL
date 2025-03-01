<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
}
$q = "SELECT * FROM register WHERE uid = ".$id;
$rs = mysqli_query($cn, $q);
$dp = mysqli_fetch_assoc($rs);
// var_dump($dp);
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
    User Profile
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
        <div class="col-md-9 px-0 py-3">
          <h2 class="text-center">Update Profile</h2>
          <hr>
          <?php
         
          // $folder="img/";

          // $img_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'webp','svg'); // valid extensions

          if (isset($_POST['b1'])) {
            $unm = $_POST['unm'];
            $uem = $_POST['uem'];
            $umob = $_POST['umob'];
            $uque = $_POST['uque'];
            $uans = $_POST['uans'];

            $update = "UPDATE `register` SET `unm`='$unm',`uemail`='$uem',`umob`= $umob,`uque`='$uque',`uans`='$uans' WHERE uid = ".$id;
            // echo $update;

            if (mysqli_query($cn, $update)) {
              echo "<script>alert('Update Successfully')
                                    window.location.href='profile.php';
                                </script>";
            } else {
              echo "<script>alert('Failed To Update')</script>";
            }
          }
          ?>
          <form action="profile.php" method="post">
            <div>
              <label>Name</label>
              <input type="text" placeholder="Name" name="unm" value="<?php echo $dp['unm'] ?>" />
            </div>
            <div>

              <div>
                <label>Email</label>
                <input type="email" placeholder="Email" name="uem" value="<?php echo $dp['uemail'] ?>" />
              </div>

              <div>

                <div>
                  <label>Mobile No</label>

                  <input type="text" placeholder="Phone" name="umob" value="<?php echo $dp['umob'] ?>" />
                </div>


                <div>
                  <label>Select Security Quetion</label>
                  <select name="uque" class="form-control">
                  <?php
                $q = "SELECT * FROM register WHERE uid=" . $id;
                $rs = mysqli_query($cn, $q);
                $data = mysqli_fetch_assoc($rs);
                ?>
                <option value="<?php echo $data['uque'] ?>" <?php if ($data['uque'] == $data['uque']) echo 'selected' ?>><?php echo $data['uque'] ?></option>
                    <option value="What is your hobby">What is your hobby?</option>
                    <option value="What is your school Name">What is your school Name?</option>
                    <option value="What is your favourite color">What is your favourite color?</option>
                  </select>


                </div>

                <div>
                  <label>Your Answer</label>

                  <input type="password" placeholder="Answer" name="uans" value="<?php echo $data['uans'] ?>" />
                </div>


                <div class="d-flex ">
                  <input type="submit" value="Update Profile" name="b1" class="btn btn-primary">
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