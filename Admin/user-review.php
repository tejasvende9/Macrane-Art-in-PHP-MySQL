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
    User Review
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
          <h2 class="text-center"> User Review</h2>
          <hr>
<!-- The Modal -->
<div class="modal" id="choice">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title ">Change Status</h4>

                                </div>
                                <!-- Modal body -->
                                <div class="modal-body col-md-5">
                                    
                                        <select id="urstatus" class="form-control text-center">
                                            <option disabled="selected">-- Publish/Unpublish --</option>
                                            <option value="publish">Publish</option>
                                            <option value="unpublish">Unpublish</option>
                                        </select>
                                        <input type="hidden" name="urid" id="urid">
                                        <button type="submit" id="update" class="btn btn-success btn-sm mt-3" data-dismiss="modal">Update</button>
                                    
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- The Modal End -->
          <table class="table table-bordered" id="user_review" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Review</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody id="reviewdata">

              
            </tbody>
          </table>
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
  <!-- dataTable -->
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <!-- dataTable -->
  <!-- Ajax -->
  <script>
    $(document).ready(function() {
      $('#user_review').DataTable();

          // Fetch Data
          function fetchData() {
                $.ajax({
                    url: "review_data.php",
                    type: "POST",
                    success: function(data) {
                        $('#reviewdata').html(data);
                    }
                });
            }
            fetchData();
      // Ajax call Code
      $(document).on("click", "a[data-role=update]", function() {
                // alert($(this).data('fid'));
                let urid = $(this).data('urid');
                let urstatus = $('#'+urid).children('td[data-target=urstatus]').text();

                $('#urid').val(urid);
                $('#urstatus').val(urstatus);
                 $('#choice').modal('toggle');
                
            });

            $('#update').click(function(){
                let urid = $('#urid').val();
                let urstatus = $('#urstatus').val();

                $.ajax({
                    url:"update_reviwe.php",
                    type:"POST",
                    data:{
                        urid:urid,
                        urstatus:urstatus
                    },
                    success:function(data){
                        // console.log(data);
                        if(data==1)
                        {
                            alert('Review Update');
                            fetchData();
                        }else
                        {
                            alert('Review Failed To Update ');
                        }
                    }
                });
            });
    });
  </script>
</body>

</html>