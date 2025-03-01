

  <!-- shop section -->

  <section class="shop_section layout_padding" style="clear:both">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          My Art Details
        </h2>
      </div>
      <div class="row">
        <?php 
    //     SELECT * 
    //     FROM friends 
    //    WHERE member_id = '".$_SESSION['userid']."' 
    // ORDER BY rand() 
    //    LIMIT 6
            $q="SELECT * FROM art ";
            $rs=mysqli_query($cn,$q);
            while($data=mysqli_fetch_assoc($rs))
            {
              ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="admin/<?php echo $data['aphoto']?>" alt="">
                  </div>
                  <div class="detail-box row">
                    <div class="col-sm-8 col-md-8 col-lg-6">

                      <h6>
                       <?php echo $data['aname']?>
                      </h6>
                    </div>
                    <div class="col-sm-8 col-md-4 col-lg-6 ">

                      <h6>
                        Price
                        <span>
                         <?php echo $data['aprice']?> RS/-
                        </span>
                      </h6>
                    </div>
                  </div>
                 
                </a>
              </div>
            </div>
              <?php 
            }
        ?>
               
      </div>
    
    </div>
  </section>

