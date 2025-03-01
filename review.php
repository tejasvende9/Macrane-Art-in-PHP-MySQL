<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Priti Nikam
                  </h5>
                  <h6>
                    Customer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              Light weight compact n very preety pieces .....they r small in length as compared to the pict but it serves my purpose n saved me the trouble of going out n looking for them ...thank u
              </p>
            </div>
          </div>
          <?php
        $status='active';
        $q = "SELECT * FROM user_review ur INNER JOIN register rg ON ur.uid=rg.uid WHERE ur.urstatus='publish'";
        $rs = mysqli_query($cn, $q);
        while ($data = mysqli_fetch_assoc($rs)) {
        ?>
          
          <div class="carousel-item ">
                  <div class="box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          <?php echo $data['unm']; ?>
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      <?php echo $data['urmsg'] ?>
                    </p>
                  </div>
                </div>


      
        <?php
        }
        ?>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>