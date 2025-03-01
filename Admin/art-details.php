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
     Art Details
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
            <h2 class="text-center"> Art Details</h2>
            <hr>
        
            <table class="table table-bordered"id="product_details"cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
    <?php
        $q="SELECT * FROM art";
        $rs=mysqli_query($cn,$q);
        $i=1;
        while($data=mysqli_fetch_assoc($rs))
        {
          ?>
       <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $data['aname']?></td>
                        <td><?php echo $data['aprice']?> Rs/-</td>
                        <td class=" <?php if($data['astatus']=='Available'){ echo "text-success";}else {
                          echo "text-danger";
                        }?> ">
                        <?php  echo $data['astatus']?>
                      </td>
                        <td>
                        <img src="<?php echo $data['aphoto']?>" alt="" width="50">
                        </td>
                        <td>
                            <a href="edit-art.php?aid=<?php echo $data['aid']?>">Edit</a> | 
                            <a href="delete_art.php?aid=<?php echo $data['aid']?>" class="text-danger">Delete</a>
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
            $('#product_details').DataTable();
        });
    </script>
</body>

</html>