<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="<?= $base ?>public/images/logo-footer.png" style="max-height:110px;" alt="">
          <!-- description -->
          <p class="alt-color">
            <?php echo ($appdet['aboutus']); ?>
          </p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-4 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>

      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="<?= $base ?>public/images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>
            <i class="fa fa-phone"></i>
            <?php echo ($appdet['phoneno1']); ?>, <?php echo ($appdet['phoneno2']); ?>, <?php echo ($appdet['phoneno3']); ?>
            <br>

            <i class="fa fa-message"></i>
            <?php echo ($appdet['email']); ?>
          </p>

        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © 2023. All Rights Reserved</p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href=""></a></li>
          <li><a class="fa fa-twitter" href=""></a></li>
          <li><a class="fa fa-pinterest-p" href=""></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
  </div>
</footer>