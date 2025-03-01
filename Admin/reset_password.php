<?php session_start();
$email = $_SESSION['email'];
include 'connection.php';
$npwd = $cpwd = $msg = "";
if (isset($_POST['b1'])) {
    $npwd = $_POST['npwd'];
    $cpwd = $_POST['cpwd'];
    if ($npwd == $cpwd) {
        $qU = "UPDATE admin SET apass ='$npwd' WHERE aemail = '$email'";
        if (mysqli_query($cn, $qU)) {
            echo "<script>
                    alert('Password Reset Successfully')
                    window.location.href='index.php'</script>";
        } else {
            $msg = "Failed To Update";
        }
    } else {
        $msg = "Password Does Not Match";
    }
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
        Reset Password
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

    <section class="contact_section mb-3 ">
        <div class="container px-0">
            <div class="heading_container ">
                <h2 class="">
                </h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class=" col-md-5 px-0">

                    <img src="images/key holder5.jpg" alt="" class="" width="80%">

                </div>
                <div class="col-md-7 px-0 py-3">
                    <h2 class="text-center">Reset Password</h2>
                    <hr>
                    <span class="text-danger"><?php echo $msg; ?></span>
                    <form class="user" action="reset_password.php" method="post">

                        <div class="form-group">

                            <div class="form-group">
                                <label>New Password</label>
                                <span> *</span>
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="npwd" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <span> *</span>
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="cpwd" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">

                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="b1" value="Reset Password">

                    </form>
                    <hr>
                                        <div class="text-center">
                                            <a class="small" href="index.php">Back To Login</a>
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