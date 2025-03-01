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
    Contact Us
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
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive pt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30406.726925746312!2d73.98590495748707!3d17.704976077166553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239ae3304e795%3A0xe15102b45934c14e!2sTamjai%20Nagar%2C%20Satara%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1698134201193!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0 py-3">
            <h2 class="text-center">Contact Us</h2>
            <hr>
            <?php 
              if(isset($_POST['b1']))
              {
                  $cnm=$_POST['cnm'];
                  $cmob=$_POST['cmob'];
                  $cem=$_POST['cem'];
                  $cmsg=$_POST['cmsg'];

                  $qu="INSERT INTO `contact`(`coname`, `comob`, `coemail`, `comsg`) VALUES ('$cnm',$cmob,'$cem','$cmsg')";
                  if (mysqli_query($cn, $qu)) {
                    echo "<script>
                                      alert('Message Send Successfully');
                                  </script>";
                  } else {
                    echo "<script>
                              alert('Failed To Send Message');
                             
                              </script>";
                  }
              } 

            ?>
          <form action="contact.php" method="post">
            <div>
                <label>Name</label>
              <input type="text" placeholder="Name"  name="cnm" required/>
            </div>
            <div>
            <div>
            <label>Mobile No</label>

              <input type="text" placeholder="Phone" name="cmob"  required />
            </div>
            <label>Email</label>

              <input type="email" placeholder="Email" name="cem" required />
            </div>
            
            <div>
            <label>Message</label>
              <input type="text" class="message-box" name="cmsg"  required placeholder="Message" />
            </div>
            <div class="d-flex ">
              <input type="submit" value="Send" name="b1"
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