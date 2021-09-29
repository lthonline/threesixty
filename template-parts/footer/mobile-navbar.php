<?php 
$menu_class = \Threesixty_Theme\Inc\Menus::get_instance();
$mobile_menu_id = $menu_class->get_menu_id( 'threesixty-mobile-menu' );
$mobile_menus = wp_get_nav_menu_items( $mobile_menu_id );

if (!empty($mobile_menus) && is_array($mobile_menus)) : 
?>
<div id="mobileMenu" class="mobile-menu">
    <button class="mobile-menu-close"><span class="dashicons dashicons-no"></span></button>
    <ul class="mobile-menu-nav">
        <?php
        foreach ($mobile_menus as $menu_item) {
            if (!$menu_item->menu_item_parent) {

                $child_menu_items = $menu_class->get_child_menu_items($mobile_menus, $menu_item->ID);
                $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                $has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';

                if (!$has_children) {
                    ?>
                    <li class="mobile-menu-item">
                        <a class="mobile-menu-link" href="<?php echo esc_url($menu_item->url); ?>">
                            <?php echo esc_html($menu_item->title); ?>
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="mobile-menu-item dropdown">
                        <a class="mobile-menu-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
</div>
<?php
endif;
?>