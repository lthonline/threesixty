<?php
/**
 * Footer templete
 *  
 * @package Threesixty 
 */
?>
</div>
<!-- Footer -->
<footer class="page-footer font-small mdb-color">
    <?php
    get_template_part('template-parts/footer/footer-widgets');
    ?>

</footer>

<?php
if (is_active_sidebar('social-fixed-icons-widget')) {
    ?>

    <div class="social-icons-wrapper">
        <?php
        dynamic_sidebar('social-fixed-icons-widget');
        ?>
    </div>

    <?php
}
?>

<?php
    get_template_part('template-parts/footer/mobile-navbar');
?>

<!-- Scroll back to top button -->
<div id="btnScrollToTop" class="scroll-top-button d-none">
  <span class="dashicons dashicons-arrow-up"></span>
</div>

<?php wp_footer(); ?>
</body>
</html>