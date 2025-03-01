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
  Macrame  Art
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
  <?php include 'header.php';?>
    <!-- end header section -->
    <!-- slider section -->

    <?php include 'slider.php';?>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->


     <!-- shop section -->

  <section class="shop_section layout_padding" style="clear:both">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          My Art Details
        </h2>
      </div>
      <div class="row">
        <?php 
    //     SELECT * 
    //     FROM friends 
    //    WHERE member_id = '".$_SESSION['userid']."' 
    // ORDER BY rand() 
    //    LIMIT 6
            $q="SELECT * FROM art WHERE aid ORDER BY rand() LIMIT 8";
            $rs=mysqli_query($cn,$q);
            while($data=mysqli_fetch_assoc($rs))
            {
              ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box ">
                <a href="">
                  <div class="img-box">
                    <img src="admin/<?php echo $data['aphoto']?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                     <?php echo $data['aname']?>
                    </h6>
                    <h6>
                      Price
                      <span>
                       <?php echo $data['aprice']?> RS/-
                      </span>
                    </h6>
                  </div>
                 
                </a>
              </div>
            </div>
              <?php 
            }
        ?>
               
      </div>
    
    </div>
  </section>

<!-- Art Section End -->
 
  <!-- client section -->
  <?php include 'review.php';?>

  <!-- end client section -->




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