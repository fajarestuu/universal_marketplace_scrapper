<main id="content" role="main">
    <!-- Product Description Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-lg-7 mb-7 mb-lg-0">
          <!-- Red Product Gallery -->
          <div id="redShoeProduct" data-target-group="idProductSwitcher">
            <div class="row align-items-center">
              <div class="col-2">
                <!-- Slick Carousel - Thumbnail Shop Product -->
                <div id="redShoeNavThumb" class="js-slick-carousel u-slick u-slick--transform-off-lg u-slick--pagination-active-border"
                     data-infinite="true"
                     data-center-mode="true"
                     data-slides-show="4"
                     data-is-thumbs="true"
                     data-vertical="true"
                     data-focus-on-select="true"
                     data-nav-for="#redShoeNavMain">
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img5.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img6.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img7.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img8.jpg" alt="Image Description">
                  </div>
                </div>
                <!-- End Slick Carousel - Thumbnail Shop Product -->
              </div>

              <div class="col-10">
                <!-- Slick Carousel - Main Shop Product -->
                <div id="redShoeNavMain" class="js-slick-carousel u-slick"
                     data-infinite="true"
                     data-nav-for="#redShoeNavThumb">
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img1.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img2.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img3.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img4.jpg" alt="Image Description">
                  </div>
                </div>
                <!-- End Slick Carousel - Main Shop Product -->
              </div>
            </div>
          </div>
          <!-- End Red Product Gallery -->

          <!-- Black Product Gallery -->
          <div id="blackShoeProduct" style="display: none; opacity: 0;" data-target-group="idProductSwitcher">
            <div class="row align-items-center">
              <div class="col-2">
                <!-- Slick Carousel - Thumbnail Shop Product -->
                <div id="blackShoeNavThumb" class="js-slick-carousel u-slick u-slick--transform-off-lg u-slick--pagination-active-border"
                     data-infinite="true"
                     data-center-mode="true"
                     data-slides-show="4"
                     data-is-thumbs="true"
                     data-vertical="true"
                     data-focus-on-select="true"
                     data-nav-for="#blackShoeNavMain">
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img9.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img10.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide my-2">
                    <img class="img-fluid u-slick--pagination-active-border__item" src="../../assets/img/100x100/img12.jpg" alt="Image Description">
                  </div>
                </div>
                <!-- End Slick Carousel - Thumbnail Shop Product -->
              </div>

              <div class="col-10">
                <!-- Slick Carousel - Main Shop Product -->
                <div id="blackShoeNavMain" class="js-slick-carousel u-slick"
                     data-infinite="true"
                     data-nav-for="#blackShoeNavThumb">
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img5.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img6.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img7.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="../../assets/img/700x400/img8.jpg" alt="Image Description">
                  </div>
                </div>
                <!-- End Slick Carousel - Main Shop Product -->
              </div>
            </div>
          </div>
          <!-- End Black Product Gallery -->
        </div>

        <div class="col-lg-5">
          <!-- Content -->
          <div class="mb-5">
            <h1 class="font-weight-normal">The Space shoes</h1>
            <span class="d-block h3 mb-3">$99</span>
            <p>Our Space Design Makeup collection – to create your coolest look, then switch it up again tomorrow.</p>
          </div>

          <!-- Color Select -->
          <h2 class="h6">Color:</h2>
          <span class="js-animation-link active u-shopping-cart-color-selector mr-2" style="background-image: url(../../assets/img/20x20/red.jpg);"
                 data-target="#redShoeProduct"
                 data-link-group="idProductSwitcher"></span>
          <span class="js-animation-link u-shopping-cart-color-selector mr-2" style="background-image: url(../../assets/img/20x20/black.jpg);"
                 data-target="#blackShoeProduct"
                 data-link-group="idProductSwitcher"></span>
          <!-- End Color Select -->

          <hr class="my-4">

          <!-- Size Select -->
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h3 class="h6 mb-0">Size:</h3>
            <a class="d-flex align-items-center text-muted" href="#shoppingCartModal" role="button"
               data-modal-target="#shoppingCartModal"
               data-overlay-color="#111722">
              <span class="fa fa-ruler-horizontal font-size-18 mr-2"></span>
              <small>Size guide</small>
            </a>
          </div>

          <div class="mb-4">
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize6" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize6">6</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize7" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize7">7</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize8" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize8">8</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize9" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize9">9</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize10" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize10">10</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize11" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize11">11</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize12" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize12">12</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline form-selector">
              <input type="radio" id="shoeSize13" name="shoeSizeSelectorName" class="custom-control-input form-selector__input">
              <label class="custom-control-label form-selector__label" for="shoeSize13">13</label>
            </div>
          </div>
          <!-- End Size Select -->

          <hr class="my-4">

          <a class="btn btn-block btn-primary" href="#">Add to Cart</a>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Product Description Section -->