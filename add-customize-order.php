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
        <div class=" col-md-3 px-0">
          <?php include 'profile-menu.php';?>
       
        </div>
        <div class="col-md-9 px-0 py-3">
            <h2 class="text-center">Add Customize Order</h2>
            <hr>
            <?php
// $pcnm=$sadr=$tem=$tpass=$pphoto=$tmob=$sgender=$sdate=$tresume="";
$folder = "order_img/";
$img_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'webp'); // valid extensions
if (isset($_POST['b1'])) {
  $con = $cn->real_escape_string($_POST['con']);
  $com = $cn->real_escape_string($_POST['com']);
  $filename = basename($_FILES['cop']['name']);
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

    if (move_uploaded_file($_FILES["cop"]["tmp_name"], $photo)) {
      // echo "varad";
      $q = "INSERT INTO `user_order`(`uid`,`anm`,`aphoto`,`amsg`) VALUES  ($id,'$con','$photo','$com')";
      // echo $q;
      if (mysqli_query($cn, $q)) {
        echo "<script>
                 alert('Order Send Successfully');
             </script>";
      } else {
        echo "<script>alert('Failed To Order');</script>";
      }
    }
  }
}
?>
          <form action="add-customize-order.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Art name</label>
              <input type="text" placeholder="Name"  name="con" required/>
            </div>
            <div>
            
            <div>
            <label>Photo</label>
              <input type="file" class="form-control" name="cop" required />
            </div>

            <div>
         <label>Any Message</label>
         <textarea name="com" class="form-control" rows="4" required></textarea>

        </div>
            
         
           
            <div class="d-flex mt-3 ">
              <input type="submit" value="Send Request" name="b1"
              class="btn btn-primary">
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