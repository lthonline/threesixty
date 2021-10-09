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
        <div class="row text-center">

                <div class="col-md-12 col-lg-12">

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
            </div>
    </div>
</div>
    
<?php
else :
    echo 'Not working...';
endif;
?>