<?php
/**
 * Theme Functions
 *  
 * @package Threesixty 
 */
function theme_styles() {
    // WP main style
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');

if (!defined('THREESIXTY_DIR_PATH')) {
    define('THREESIXTY_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('THREESIXTY_DIR_URI')) {
    define('THREESIXTY_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('THREESIXTY_BUILD_URI')) {
    define('THREESIXTY_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('THREESIXTY_BUILD_PATH')) {
    define('THREESIXTY_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
}

if (!defined('THREESIXTY_BUILD_JS_URI')) {
    define('THREESIXTY_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('THREESIXTY_BUILD_JS_DIR_PATH')) {
    define('THREESIXTY_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('THREESIXTY_BUILD_IMG_URI')) {
    define('THREESIXTY_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('THREESIXTY_BUILD_CSS_URI')) {
    define('THREESIXTY_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('THREESIXTY_BUILD_CSS_DIR_PATH')) {
    define('THREESIXTY_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if (!defined('THREESIXTY_BUILD_LIB_URI')) {
    define('THREESIXTY_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/library');
}

require_once THREESIXTY_DIR_PATH . '/inc/helpers/autoloader.php';
require_once THREESIXTY_DIR_PATH . '/inc/helpers/template-tags.php';

function threesixty_get_theme_instance() {
    \THREESIXTY_THEME\Inc\THREESIXTY_THEME::get_instance();
}

threesixty_get_theme_instance();

function threesixty_widgets_init() {
    register_sidebar(array(
        'name' => __('Contact Section Title', 'threesixty'),
        'id' => 'contact-sec-title-widget',
        'description' => __('Contact section title widget.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Contact Info', 'threesixty'),
        'id' => 'contact-info-widget',
        'description' => __('Contact information widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Contact Form', 'threesixty'),
        'id' => 'contact-form-widget',
        'description' => __('Contact form widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Google Trusted', 'threesixty'),
        'id' => 'google-trusted-widget',
        'description' => __('Google Trusted widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 1', 'threesixty'),
        'id' => 'footer-1-widget',
        'description' => __('Footer 1 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'threesixty'),
        'id' => 'footer-2-widget',
        'description' => __('Footer 2 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'threesixty'),
        'id' => 'footer-3-widget',
        'description' => __('Footer 3 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 4', 'threesixty'),
        'id' => 'footer-4-widget',
        'description' => __('Footer 4 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Copyright',
        'id' => 'copyright-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-widget">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Social Fixed Icons',
        'id' => 'social-fixed-icons-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-widget">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'threesixty_widgets_init');

function year_shortcode () {
$year = date_i18n ('Y');
return $year;
}
add_shortcode ('year', 'year_shortcode');

function show_on_home_shortcode() {
    $args = array(
        'post_type' => 'portfolio_type',
        'post_per_page' => -1,
        'order' => 'ASC',
        'meta_query' => array(
            'post_type' => 'portfolio_type',
            array(
                'key' => 'show_on_home_page',
                'value' => '1',
                'compare' => '=='
            )
        )
    );

    //Get the post
    $my_portfolios = new WP_Query($args);
    
    if ($my_portfolios->have_posts()):
    ?>
    <div id="latestPortfolios" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner portfolio-grid row w-100 mx-auto" role="listbox">
        <?php
        $counter = 1;
        while ($my_portfolios->have_posts()):
        $my_portfolios->the_post();
        $activeClass = "";
        if ($counter == 1) {
            $activeClass = "active";
        } else {
            $activeClass = "";
        }
        ?>
        <div class="carousel-item grid-col col-12 col-sm-6 col-md-4 col-lg-4 align-items-stretch <?php echo $activeClass; ?>">
                <div class="card">
                    <?php
                if(get_field('virtual_tour_link')){
                    if ( has_post_thumbnail() ) {?>
                    <a href="<?php the_field('virtual_tour_link')?>" target="_blank">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                    </a>
                    <?php }
                    } else {
                        if ( has_post_thumbnail() ) { ?>
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                        <?php }
                    } ?>
                    <div class="card-body text-center">
                    <?php
                    if(get_field('virtual_tour_link')) { ?>
                        <h2><a class="card-title" href="<?php the_field('virtual_tour_link')?>" target="_blank"><?php the_title(); ?></a></h2>
                        <a class="icon-link" href="<?php the_field('virtual_tour_link')?>" target="_blank"><span class="dashicons dashicons-video-alt"></span></a>
                        <?php } else { ?>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <?php } 
                        if(get_field('facebook_link')) { ?>
                        <a class="icon-link" href="<?php the_field('facebook_link')?>" target="_blank"><span class="dashicons dashicons-facebook"></span></a>
                        <?php }
                        if(get_field('youtube_link')) { ?>
                        <a class="icon-link" href="<?php the_field('youtube_link')?>" target="_blank"><span class="dashicons dashicons-youtube"></span></a>
                        <?php }
                        if(get_field('instagram_link')) { ?>
                        <a class="icon-link" href="<?php the_field('instagram_link')?>" target="_blank"><span class="dashicons dashicons-instagram"></span></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php        
        $counter++;
        endwhile;
        ?> 
        </div>
        <a class="carousel-control-prev" href="#latestPortfolios" role="button" data-slide="prev">
            <div class="carousel-control-icon-bg">
                <span class="dashicons dashicons-arrow-left-alt2" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next" href="#latestPortfolios" role="button" data-slide="next">
            <div class="carousel-control-icon-bg">
                <span class="dashicons dashicons-arrow-right-alt2" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </a>
    </div>
    <?php    
    endif;
    wp_reset_query();
}

add_shortcode('home-portfolio-slide', 'show_on_home_shortcode');
