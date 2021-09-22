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
if (is_active_sidebar('chat-widget')) {
    ?>
<!--    <div class="chat-icons-wrapper">-->
        <?php
//        dynamic_sidebar('chat-widget');
        ?>
<!--    </div>-->
    <?php
}
?>
<!-- Footer -->
<!-- <div class="social-icons-wrapper">
    <ul class="list-unstyled">
        <li class="list-item social-icon">
            <a class="btn-floating btn-sm rgba-white-slight">
                <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/facebook.png" alt="" width="35" height="35">
            </a>
        </li>
        <li class="list-item social-icon">
            <a class="btn-floating btn-sm rgba-white-slight">
                <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/youtube.png" alt="" width="35" height="35">
            </a>
        </li>
        <li class="list-item social-icon">
            <a class="btn-floating btn-sm rgba-white-slight">
                <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/instagram.png" alt="" width="35" height="35">
            </a>
        </li>
    </ul>
</div>
<div class="chat-icons-wrapper">
    <ul class="list-unstyled">
        <li class="list-item chat-icon">
            <a class="btn-floating btn-sm rgba-white-slight">
                <img class="img-fluid" src="http://localhost.the360virtualtour.com/wp-content/uploads/2021/04/comment.png" alt="" width="40" height="40">
            </a>
        </li>        
    </ul>
</div> -->
<?php wp_footer(); ?>
</body>
</html>