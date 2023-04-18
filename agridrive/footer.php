<footer>
<!-- Footer Wrapper start -->
<section class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3 about">
        <?php
          get_template_part( 'template-parts/widgets/footer-widget1' );
        ?>
      </div>
      <div class="col-sm-6 col-md-3 footer-nav">
        <?php
          get_template_part( 'template-parts/widgets/footer-widget2' );
        ?>
      </div>
      <div class="col-sm-6 col-md-3">
        <?php
          get_template_part( 'template-parts/widgets/footer-widget3' );
        ?>
      </div>
      <div class="col-sm-6 col-md-3">
        <?php
          get_template_part( 'template-parts/widgets/footer-widget4' );
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Footer Wrapper End --> 
<!-- Copyrights -->
  <div class="container">
  <div class="col-sm-6" style="text-align:left;">
    <p style="text-align:left;">&copy; Copyright 
      <script type="text/javascript">
  var d=new Date();
  document.write(d.getFullYear());
  </script> 
      Agridrive Limited | All Rights Reserved.</p>
  </div>
  <div class="col-sm-6" style="text-align:right;"> <a href="http://www.smdassociates.co.ke">Created by SMD Associates</a> </div>
  </div>
</footer>
<!-- Footer start -->
  <?php wp_footer(); ?>
<!-- Footer end -->
</body>
</html>