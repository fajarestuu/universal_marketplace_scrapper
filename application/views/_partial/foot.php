 <!-- Go to Top -->
 <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="<?= base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?= base_url()?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/custombox/dist/custombox.min.js"></script>
  
  <script src="<?= base_url()?>assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="<?= base_url()?>assets/vendor/custombox/dist/custombox.legacy.min.js"></script>

  <!-- JS Space -->
  <script src="<?= base_url()?>assets/js/hs.core.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.header.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.unfold.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.validation.js"></script>
  <script src="<?= base_url()?>assets/js/helpers/hs.focus-state.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.modal-window.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.show-animation.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.go-to.js"></script>
  <script src="<?= base_url()?>assets/js/components/hs.slick-carousel.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');



      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>