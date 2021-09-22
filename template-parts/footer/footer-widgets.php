<?php
/**
 * Header Navigation template.
 *
 * @package Threesixty
 */
$menu_class = \Threesixty_Theme\Inc\Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id('threesixty-footer-menu');
$footer_menus = wp_get_nav_menu_items($footer_menu_id);
?>

<?php if (!empty($footer_menus) && is_array($footer_menus)) : ?>
<div class="contact-section contact-sec-bg pt-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php
                if (is_active_sidebar('contact-sec-title-widget')) {
                    ?>
                    <div class="mb-3 mt-3 contact-header">
                        <?php
                        dynamic_sidebar('contact-sec-title-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>
        </div>
    </div>
    <div class="container">
        <div class="row text-md-left mt-3 pb-3"> 
             <?php
                if (is_active_sidebar('contact-info-widget')) {
                    ?>
                    <div class="col-md-6 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('contact-info-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>
            
            <?php
                if (is_active_sidebar('contact-form-widget')) {
                    ?>
                    <div class="col-md-6 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('contact-form-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>
        </div>
    </div>
</div>

<div class="footer-menu footer-bg text-center text-md-left pt-4">
    <div class="container">
        <div class="row text-center text-md-left mt-3 pb-3">
            <?php
            if (is_active_sidebar('footer-1-widget')) {
            ?>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
                    <?php
                    dynamic_sidebar('footer-1-widget');
                    ?>
                </div>
            <?php
            }
            ?>

                <hr class="w-100 clearfix d-md-none">

                <?php
                if (is_active_sidebar('footer-2-widget')) {
                    ?>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('footer-2-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>

                <hr class="w-100 clearfix d-md-none">

                <?php
                if (is_active_sidebar('footer-3-widget')) {
                    ?>
                    <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('footer-3-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>

                <hr class="w-100 clearfix d-md-none">

                <?php
                if (is_active_sidebar('footer-4-widget')) {
                    ?>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('footer-4-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>

                <hr class="w-100 clearfix d-md-none">

                <?php
                if (is_active_sidebar('footer-5-widget')) {
                    ?>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                        <?php
                        dynamic_sidebar('footer-5-widget');
                        ?>
                    </div>
                    <?php
                }
                ?>        

                <hr class="w-100 clearfix d-md-none">
        </div>
        <div class="row text-center text-md-left">

                <div class="col-md-7 col-lg-8">

                    <?php
                    if (is_active_sidebar('copyright-widget')) {
                        ?>
                        <p class="text-center text-md-center" style="color: #ffffff;">
                            <?php
                            dynamic_sidebar('copyright-widget');
                            ?>
                        </p>
                        <?php
                    }
                    ?>

                </div>

                <div class="col-md-5 col-lg-4 ml-lg-0">

                        <?php
                        if (is_active_sidebar('social-icons-widget')) {
                            ?>
                            <div class="text-center text-md-right">
                                <?php
                                dynamic_sidebar('social-icons-widget');
                                ?>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
            </div>
    </div>
</div>
    
<?php
else :
    echo 'Not working...';
endif;
?>

<!-- Footer Links -->
<!-- <div class="container text-center text-md-left">      
  <div class="row text-center text-md-left mt-3 pb-3">
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
      <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #ffdf6c;">Company</h6>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">About Us</a>
      </p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Contact</a>
      </p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Portfolio</a>
      </p>
    </div>

    <hr class="w-100 clearfix d-md-none">
    
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
      <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #ffdf6c;">Service</h6>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">360° Virtual Tours</a>
      </p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Google Virtual Tours</a>
      </p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Still & Video Photography</a>
      </p>
    </div>

    <hr class="w-100 clearfix d-md-none">

    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
      <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #ffdf6c;">Support</h6>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">FAQ</a>
      </p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Talk to Support</a>
      </p>
    </div>
    
    <hr class="w-100 clearfix d-md-none">
    
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
      <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #ffdf6c;">Blog</h6>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">What is 360° VT?</a></p>
      <p>
        <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Who needs 360° VT?</a></p>
      <p>
          <a href="#" style="color: #ffffff; font-weight: bold; font-size: 15px; text-decoration: none;">Benefits of 360° VT</a></p>        
    </div>
    
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-2">
        <p>
        <i class="fas fa-print mr-3"></i></p>
      <h6 class="text-uppercase mb-4" style="color: #ffffff;">Back to Top</h6>
    </div>
    
  </div>
    
  <hr>
  
  <div class="row d-flex align-items-center">
      
    <div class="col-md-7 col-lg-8">
        
      <p class="text-center text-md-center" style="color: #ffffff;">© 2021 by The 360° VIRTUAL TOUR | All Rights Reserved.</p>

    </div>
      
    <div class="col-md-5 col-lg-4 ml-lg-0">
        
      <div class="text-center text-md-right">
          <h6 class="text-uppercase mb-4" style="color: #ffffff;">Follow us on:</h6>
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight">
                <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/facebook.png" alt="" width="35" height="35" />
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight">
              <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/instagram.png" alt="" width="35" height="35" />
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight">
              <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/youtube.png" alt="" width="35" height="35" />
            </a>
          </li>
        </ul>
      </div>

    </div>
      
  </div>
  
</div>-->
<!-- Footer Links -->