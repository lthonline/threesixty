<?php
/**
 * Header Navigation template.
 *
 * @package Threesixty
 */

$menu_class = \Threesixty_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'threesixty-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-between">
        <div class="site-logo">
            <div class="title-with-logo">
                <?php the_custom_logo(); ?>
            </div>
            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <div class="title-tagline-wrap">
                    <h1 class="site-title"><?php echo get_bloginfo('name'); ?></h1>
                    <small><?php echo get_bloginfo('description'); ?></small>
                </div>            
            </a>
        </div>        
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
            if (!empty($header_menus) && is_array($header_menus)) : ?>
                <ul class="navbar-nav ml-auto">
                <?php
                foreach ($header_menus as $menu_item) {
                    if (!$menu_item->menu_item_parent) {

                        $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                        $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                        $has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';

                        if (!$has_children) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    foreach ($child_menu_items as $child_menu_item) {
                                        ?>
                                        <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>">
                                            <?php echo esc_html($child_menu_item->title); ?>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                        <?php
                    }
                }
                ?>
            </ul>

            <?php
            else :
                echo 'Not working...';

            endif;
        ?>
    </div>
    </div>    
</nav>