<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-half-primary-v1">
      <div class="bg-img-hero" style="background-image: url(<?= base_url()?>assets/img/bg/bg2.png);">
        <div class="container space-2 space-4-top--lg space-3-bottom--lg">
          <div class="w-md-75 mx-md-auto">
            <!-- Title -->
            <div class="row align-items-sm-center mb-4">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <h1 class="text-white mb-0">Insert Link</h1>
              </div>

              
            </div>
            <!-- End Title -->
          </div>

          <div class="w-md-75 mx-md-auto">
          <form action="<?= base_url()?>/welcome/linkinput" method="post">
            <!-- Input -->
            <div class="js-focus-state input-group input-group-lg form form--lg mb-3">
                
              <input type="text" class="form-control form__input" name="link" required
                     placeholder="ex : www.tokopedia.com/"
                     aria-label="example">
              <span class="input-group-append form__append">
                <button type="submit" class="btn btn-dark px-5">
                  <span class="fa fa-search"></span>
                </button>
              </span>
              
            </div>
            </form>
            <!-- End Input -->

           
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
    <br>
    <hr class="my-0">
    <br>

    <!-- Clients Section -->
    <div class="container">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5">
        <h2 class="h3">Available Marketplace</h2>
      </div>
      <!-- End Title -->

      <div class="bg-primary shadow-lg rounded p-9 mb-3">
        <!-- Slick Carousel -->
        <div class="js-slick-carousel u-slick"
             data-autoplay="true"
             data-speed="5000"
             data-infinite="true"
             data-slides-show="6"
             data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 576,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 480,
               "settings": {
                 "slidesToShow": 2
               }
             }]'>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/amazon-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/google-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/paypal-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/slack-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/samsung-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/airbnb-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/lenovo-white.png" alt="Image Description">
          </div>
          <div class="js-slide">
            <img class="u-clients" src="<?= base_url()?>assets/img/clients/spotify-white.png" alt="Image Description">
          </div>
        </div>
        <!-- End Slick Carousel -->
      </div>

      <div class="text-center">
        <a href="#">How to Use <span class="fa fa-angle-right ml-2"></span></a>
      </div>
    </div>
    <!-- End Clients Section -->
<br>
    <hr class="my-0">

    <!-- Contact Us -->
    <div class="container">
      <div class="row space-2">
        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Coins Name -->
          <div class="media">
            <img class="max-width-9 mr-2" src="<?= base_url()?>assets/svg/components/contacts-primary-icon.svg" alt="Image Description">
            <div class="media-body">
              <h4 class="text-secondary font-size-14 mb-0">Call us</h4>
              <span class="d-block font-size-14">+62 858 1440 0521</span>
            </div>
          </div>
          <!-- End Coins Name -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Coins Name -->
          <div class="media">
            <img class="max-width-9 mr-2" src="<?= base_url()?>assets/svg/components/email-primary-icon.svg" alt="Image Description">
            <div class="media-body">
              <h4 class="text-secondary font-size-14 mb-0">Email us</h4>
              <span class="d-block font-size-14">fedesignofficial@gmail.com</span>
            </div>
          </div>
          <!-- End Coins Name -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Coins Name -->
          <div class="media">
            <img class="max-width-9 mr-2" src="<?= base_url()?>assets/svg/components/location-primary-icon.svg" alt="Image Description">
            <div class="media-body">
              <h4 class="text-secondary font-size-14 mb-0">Address</h4>
              <span class="d-block font-size-14">Purwakarta</span>
            </div>
          </div>
          <!-- End Coins Name -->
        </div>
      </div>
    </div>
    <!-- End Contact Us -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->