<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
$aid = $_GET['aid'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
}
?>
<?php
$q = "SELECT * FROM art WHERE aid = " . $aid;
$rs = mysqli_query($cn, $q);
$data = mysqli_fetch_assoc($rs);

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
    Edit Product
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
        <?php
        $folder = "product_img/";
        $img_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'webp'); // valid extensions
        if (isset($_POST['b1'])) {
          $an = $cn->real_escape_string($_POST['an']);
          $ap = $cn->real_escape_string($_POST['ap']);
          $astatus = $cn->real_escape_string($_POST['astatus']);
          $filename = basename($_FILES["aph"]["name"]);

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
            if (move_uploaded_file($_FILES["aph"]["tmp_name"], $photo)) {
              // echo "varad";
              $q = "UPDATE art SET aname='$an' ,aprice=$ap ,aphoto='$photo',astatus='$astatus' WHERE aid =" . $aid;
              // echo $q;
            }
          } else {
            $q = "UPDATE art SET aname='$an', aprice=$ap,astatus='$astatus' WHERE aid =" . $aid;
          }
          // echo $q;
          if (mysqli_query($cn, $q)) {
            echo "<script>
                                          alert('Product Update Successfully');
                                          window.location.href='art-details.php';
                                      </script>";
          } else {
            echo "<script>alert('Failed To Update Product');</script>";
          }
        }
        ?>
        <div class="col-md-9 px-0 py-3">
          <h2 class="text-center">Edit Art</h2>
          <hr>
          <form action="edit-art.php?aid=<?php echo $data['aid'] ?>" method="post" enctype="multipart/form-data">
            <div>
              <label>Art name</label>
              <input type="text" placeholder="Name" name="an" value="<?php echo $data['aname'] ?>" />
            </div>
            <div>
              <label>Art Price</label>
              <input type="text" placeholder="Price" name="ap" value="<?php echo $data['aprice'] ?>" />
            </div>
            <div>
              <label>Art Status</label>
              <select name="astatus" class="form-control">
                <option value="" disabled="disabled">--SELECT ART STATUS--</option>
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
              </select>
            </div>


            <div class="row mt-2">
              <div class="col-md-9">
                <div>
                  <label>Photo</label>
                  <input type="file" class="form-control" name="aph" />
                </div>
              </div>
              <div class="col-md-3">
                <img src="<?php echo $data['aphoto'] ?>" alt="" width="80">
              </div>
            </div>

            <div class="d-flex mt-3 ">
              <input type="submit" value="Edit Art" name="b1" class="btn btn-primary">
            </div>

            <div class="d-flex mt-2 ">
              <a href="art-details.php" class="btn btn-danger form-control">Cancel Update</a>
            </div>

          </form>
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