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
    Add Art
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
          <h2 class="text-center">Add Art</h2>
          <hr>
          <?php
// $pcnm=$sadr=$tem=$tpass=$pphoto=$tmob=$sgender=$sdate=$tresume="";
$folder = "product_img/";
$img_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'webp'); // valid extensions
if (isset($_POST['b1'])) {
  $an = $cn->real_escape_string($_POST['an']);
  $ap = $cn->real_escape_string($_POST['ap']);
  $filename = basename($_FILES['aph']['name']);
  //abc.jpg
  $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

  // can upload same image using rand function
  $nfilename = rand(1, 100000) . $filename; //10251abc.jpg

  $path = $folder . $nfilename;
  //profile/10251abc.jpg
  // get uploaded file's extension

  // check's valid format
  if (in_array($ext, $img_extensions)) {

    $photo = strtolower($path);

    // echo $photo ;

    if (move_uploaded_file($_FILES["aph"]["tmp_name"], $photo)) {
      // echo "varad";
      $q = "INSERT INTO `art`(`aname`,`aprice`,`aphoto`,`astatus`) VALUES  ('$an',$ap,'$photo','Available')";
      // echo $q;
      if (mysqli_query($cn, $q)) {
        echo "<script>
                 alert('Product Added Successfully');
             </script>";
      } else {
        echo "<script>alert('Failed To Add Product');</script>";
      }
    }
  }
}
?>
          <form action="add-art.php" method="post" enctype="multipart/form-data">
            <div>
              <label>Art name</label>
              <input type="text" placeholder="Name" name="an" required />
            </div>
            <div>
              <label>Art Price</label>
              <input type="text" placeholder="Price" name="ap" required />
            </div>
            <div>
              <div>
                <label>Photo</label>
                <input type="file" class="form-control" name="aph" required />
              </div>

              <div class="d-flex mt-3 ">
                <input type="submit" value="Add Art" name="b1" class="btn btn-primary">
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