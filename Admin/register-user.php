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
   <!-- datatable -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
        <div class="col-md-9 px-1 py-3">
            <h2 class="text-center"> Register User</h2>
            <hr>
        
            <table class="table table-bordered"id="register_details"cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>              
                <?php
        $q="SELECT * FROM register";
        $rs=mysqli_query($cn,$q);
        $i=1;
        while($data=mysqli_fetch_assoc($rs))
        {
          ?>
       <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $data['unm']?></td>
                        <td><?php echo $data['umob']?></td>                        
                        <td><?php echo $data['uemail']?></td>                        
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
       <!-- dataTable -->
       <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <!-- dataTable -->
    <!-- Ajax -->
    <script>
        $(document).ready(function() {
            $('#register_details').DataTable();
        });
    </script>

</body>

</html>