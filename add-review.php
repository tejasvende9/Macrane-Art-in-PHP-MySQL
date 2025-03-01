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
    Add Review
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
          <?php
$msg="";
   if(isset($_POST['b1']))
   {
      $ureview=$_POST['ureview'];

      $q="INSERT INTO  user_review(uid,urmsg,urstatus)VALUES($id,'$ureview','Publish')";
      if($rs=mysqli_query($cn,$q))
      {
         $msg="<div class='container text-center p-2 mb-5 bg-success'><h3>Message Sended</h3></div>";
      }
      else
      {
         $msg="<div class='container text-center p-2 mb-5 bg-danger'><h3>Failed To Message Send</h3></div>";
      }
   }
?>
        </div>
        <div class="col-md-9 px-0 py-3">
            <h2 class="text-center">Add Review</h2>
            <hr>
            <form action="add-review.php" method="post">         
         <div>

            <?php echo $msg ?>
         <label>Add Your Review Here..</label>
         <textarea name="ureview" class="form-control" rows="10" required></textarea>

        </div>       
        
         <div class="d-flex mt-3">
           <input type="submit" value="Add Review" name="b1"
           class="btn btn-danger">

           
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