 <?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
if (!isset($_SESSION["id"])) {
  header('location:index.php');
}
?>
<?php
// include "config.php";
$sql = "SELECT * FROM art WHERE astatus='Available'";
$products = "<option selected disabled>Select</option>";
$res = $cn->query($sql);
if ($res->num_rows > 0) {
  while ($row = $res->fetch_assoc()) {
    $products .= "<option value='{$row["aid"]}'>{$row["aname"]}</option>";
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

          <h2 class="text-center">Create Shop Order</h2>
          <hr>

          <p class="text-center">
          <form action="action.php" id="submite">
            <div class="col-md-4 mb-2">
              <label for="">Select Customer Name</label>
              <select class="form-control uid" name="uid" required> 
              <option selected disabled>Select</option>
                <?php 
                  $q="SELECT * FROM register";
                  $rs=mysqli_query($cn,$q);
                  while($data=mysqli_fetch_assoc($rs))
                  {
                    ?>
                    <option value="<?php echo $data['uid']?>"><?php echo $data['unm']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
           
            <br>

            </p>
            <div id="success"></div>
            <table class='table table-bordered'>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Add <input type='button' value='+' class='add btn btn-success btn-sm'></th>
                </tr>
              </thead>
              <tbody id="tbl">
                <tr>
                  <td><select class='form-control aid' name="aid[]"><?php echo $products; ?></select></td>
                  <td><input class='form-control price' type='text' name='price[]' readonly></td>
                  <td><input class='form-control qty' type='text' min=1 name='qty[]' onchange="this.form"></td>
                  <td><input class='form-control total' type='text' name='total[]' readonly></td>
                  <td><input type='button' value='-' class='rmv btn btn-danger btn-sm'></td>
                </tr>
                </tbody>
                <tr>
                  <td colspan="3"><b>Total Bill</b></td>
                  <td colspan="2">
                    <input type="number" name="gtotal" id="gtotal" class="gtotal form-control"readonly>
                  </td>
                </tr>
            </table>
            <br>
            <div class="col-md-4">
              <label for="">Payment Method</label>
              <select class="form-control pay" name="pay" class="mx-4" required>
                <option value="disabled selected">Paid By</option>
                <option value="Cash">Cash</option>
                <option value="Online">Online</option>
              </select>

            </div>
            <br>
            <input type="submit" value="Submit" class="btn btn-primary" id="add_btn">
          </form><!-- Content Row -->

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

  <script>
    $(document).ready(function() {

      //Add Row
      $("body").on("click", ".add", function() {
        var products = "<?php echo $products; ?>";
        $("#tbl").append("<tr> <td><select class='form-control aid' name='aid[]'>" + products + "</select></td><td><input class='form-control price' type='text' name='price[]'readonly></td> <td><input class='form-control qty' type='text'min=1 name='qty[]' onchange='this.form'></td> <td><input class='form-control total' type='text' name='total[]'readonly></td> <td><input type='button' value='-' class='btn btn-sm btn-danger rmv'></td></tr>");
      });

      //Remove Row
      $("body").on("click", ".rmv", function() {
        $(this).parents("tr").remove();
        subtotal();
      });

      //Get product price
      $("body").on("change", ".aid", function() {
        var aid = $(this).val();
        var input = $(this).parents("tr").find(".price");
        $.ajax({
          url: "get_price.php",
          type: "post",
          data: {
            aid: aid
          },
          success: function(res) {
            $(input).val(res);
          }
        });
      });

      //Find Total
      $("body").on("keyup", ".qty", function() {
        var qty = Number($(this).val());
        var price = Number($(this).parents("tr").find(".price").val());
        $(this).parents("tr").find(".total").val(qty * price);

        subtotal();
      });

      // Ajax call Code
      $('#submite').submit(function(e) {
        e.preventDefault();
        $('#add_btn').val('Adding...');
        $.ajax({
          url: "action.php",
          type: "POST",
          data: $(this).serialize(),
          success: function(data) {
            // console.log(data);
            $("#success").html(data);
            $("#add_btn").val('Submit');
            $("#submite")[0].reset();
            $(".appenf_item").remove();

          }
        })
      });
    });

    function subtotal() {
      let total = document.getElementsByClassName('total');
      let sum = 0;
      for (let index = 0; index < total.length; index++) {
        let stotal = parseInt(total[index].value);
        sum = sum + stotal;
      }
      // document.getElementById('gtotal').value =sum;
      document.getElementsByName('gtotal')[0].value =sum;
    }
    subtotal();
  </script>
</body>

</html>