<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
}
$oid = $_GET['oid'];
?>
<?php
$q = "SELECT * 
   FROM customer_order co 
   INNER JOIN art art ON co.aid = art.aid
   INNER JOIN register rg ON co.uid = rg.uid WHERE co.oid = " . $oid;
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_assoc($rs);
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
    Register User
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
        <div class="col-md-9 px-1 py-3">
          <h3 class="text-center">
            Order Information
          </h3>
          <hr>
          <p class="text-center">
            Customer Name - <b><?php echo $row['unm'] ?></b> <br><br>
            Date- <b><?php echo $row['date'] ?></b>
            <span class="mx-5">Paid By - <b><?php echo $row['pay_method'] ?></b></span>
          </p>
          <hr>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $q = "SELECT * 
     FROM customer_order co 
     INNER JOIN art art ON co.aid = art.aid
     INNER JOIN register rg ON co.uid = rg.uid WHERE co.oid = " . $oid;
              $rs = mysqli_query($cn, $q);
              $i = 1;
              while ($data = mysqli_fetch_assoc($rs)) {
              ?>

                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['aname'] ?></td>
                  <td><?php echo $data['price'] ?></td>
                  <td><?php echo $data['qty'] ?></td>
                  <td><?php echo $data['total'] ?></td>

                </tr>
              <?php
                $i++;
              }
              ?>

            </tbody>
          </table>

          <h5 class="text-center mt-5">
            Total Bill - <?php echo $row['gtotal'] ?> Rs/-
          </h5>
          <div class="p-2 mt-3">
            <a href="order-details.php" class="btn bnt-sm btn-danger">Back</a>
          </div>
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