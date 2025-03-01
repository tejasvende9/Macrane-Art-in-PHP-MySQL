<?php session_start();
include 'connection.php';

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
About Me
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

  <section class="contact_section layout_padding">
    
    <div class="container container-bg">

      <div class="row">
        <div class=" col-md-3 px-0">
          <div class="p-3">
           <img src="images/Ashwini jadhav.png" alt="Ashwini jadhav"
           width="98%" >
          </div>
        </div>
        <div class="col-md-9 px-0 p-3">
            <h2>About Us</h2>
            <p>
            Ashwini jadhav
is owner of this online shopping macrame art product creating in home 
made macrame product
            </p>
            <p>
            Macrame art made this product at home with the help of different type of 
nylon knots. we are able to view unique and attractive design.
The owner of the macarme product Mrs.Komal Bhagade. 5 years 
experience for created the macarme art product but she as working on this 
macrame art sines 2 year. she as created by using macrame material such 
as nylon wire, mirror, beads, ring. etc
            </p>
            <div>
        <h3>My Vision : </h3>
        <p>
        Macrame art product is made creative and innovative way
fulfillment of customer orders
        </p>   
    </div>
        </div>
      </div>

     
    </div>
    <div class="my-3">
        <?php include 'review.php' ?>
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