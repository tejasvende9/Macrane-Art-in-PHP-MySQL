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
   <!-- DataTable -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- DataTable -->
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
    <div class="container-fluid  container-bg">
      <div class="row p-5">
        <div class=" col-md-3 px-0">
          <?php include 'profile-menu.php'; ?>

        </div>
        <div class="col-md-9 px-3 py-3">

          <h2 class="text-center"> Order Details</h2>
          <hr>

          <div id="success"></div>
          <table class="table table-bordered " id="Order_Table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Order Id</th>
                <th>Total Bill</th>
                <th>Paid By</th>
                <th>Date</th>
                <th>Action </th>

              </tr>
            </thead>
            <tbody>
              <?php
              //  $q="SELECT DISTINCT oid,odate,ostatus,dstatus FROM user_order ";
              $q = "SELECT DISTINCT oid,gtotal,pay_method,date FROM customer_order";
              $rs = mysqli_query($cn, $q);
              $i=1;
              while ($data = mysqli_fetch_assoc($rs)) {
              ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $data['oid'] ?></td>
                  <td><?php echo $data['gtotal'] ?></td>
                  <td><?php echo $data['pay_method'] ?></td>
                  <td><?php echo $data['date'] ?></td>
                  <td>
                    <a href="track-order-info.php?oid=<?php echo $data['oid']?>">Track</a>
                  </td>

                </tr>

              <?php
              $i++;
              }
              ?>

            </tbody>
          </table>


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
 <!-- Page level custom scripts -->
 <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<!-- Data Table -->
     <script>
    $(document).ready(function () {
    $('#Order_Table').DataTable();
});
</script>
</body>

</html>