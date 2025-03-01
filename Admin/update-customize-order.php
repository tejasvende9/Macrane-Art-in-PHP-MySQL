<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
}
$uoid=$_GET['uoid'];
$q="SELECT * FROM user_order uo
INNER JOIN register ri ON uo.uid = ri.uid WHERE uo.uoid= ".$uoid;
$rs=mysqli_query($cn,$q);
$data=mysqli_fetch_assoc($rs);
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
    Upadte Custo Order Details
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
          
            <h2 class="text-center">Update Customize Order information</h2>
            <hr>
            <h3 class="text-center">
          Client name - <b> <?php echo $data['unm'] ?></b>
          <br><br>  
          Mobile No - <b> <?php echo $data['umob'] ?></b>

          <br><br>
          <img src="../<?php echo $data['aphoto']?>" alt=""
                            width="60">
          <br>
          
</h3>
<?php
    
      if(isset($_POST['b1']))
      {
          $am=$_POST['cuamt'];
          $pay=$_POST['pay'];

           
              $q="UPDATE user_order SET abill = $am, apay_method= '$pay' WHERE uoid=".$uoid;
           
          
          if (mysqli_query($cn, $q)) {
            echo "<script>alert('Update Successfully')
                                  window.location.href='customize-order-details.php';
                              </script>";
          } else {
            echo "<script>alert('Failed To Update')</script>";
          }
      }


?>
          <form action="update-customize-order.php?uoid=<?php echo $data['uoid'] ?>" method="post">
            <textarea cols="80" rows="3" class="ms-4" readonly><?php echo $data['amsg']?></textarea>
            <div>
                <label>Amount To Paid </label>
              <input type="text" placeholder="Amount"value="<?php echo $data['abill']?>" name="cuamt" required/>
            </div>
            <div>
                <label> Paid By</label>
             <select name="pay" class="form-control">
              <option value="Not paid">Not paid</option>
              <option value="Cash">Cash</option>
              <option value="Online">Online</option>
             </select>
            </div>
            <div>
           
            <div class="d-flex mt-3 ">
              <input type="submit" value="Update Order" name="b1"class="btn btn-primary">
            </div>
          
          </form>
          <div>
              <a href="customize-order-details.php" class="btn btn-danger btn-sm mt-3">Back</a>
          </div>
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