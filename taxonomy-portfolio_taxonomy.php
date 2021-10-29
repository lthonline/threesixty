<?php
get_header();

$portfolio_cat_slug = get_queried_object()->slug;
$portfolio_cat_name = get_queried_object()->name;
$portfolio_desc = term_description();
?>

<div class="wrap">
    <div id="primary" class="content-area container">
        <main id="main" class="site-main" role="main">
            <div class="threesixty-post-list">
                <div class="portfolio-header-wrapper text-center">
                    <h2 class="portfolio-cat-title"><?php echo $portfolio_cat_name ?></h2>
                    <p><?php echo $portfolio_desc; ?></p>
                </div>
                <div style="position: relative">
                    <?php
                    $portfolio_tax_post_args = array(
                        'post_type' => 'portfolio_type',
                        'post_per_page' => -1,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_taxonomy',
                                'field' => 'slug',
                                'terms' => $portfolio_cat_slug
                            )
                        )
                    );

                    $al_tax_post_qry = new WP_Query($portfolio_tax_post_args); ?>
                    <div class="row portfolio-grid">
                    <?php if ($al_tax_post_qry->have_posts()):
                        while ($al_tax_post_qry->have_posts()):
                            $al_tax_post_qry->the_post();
                            ?>
                                <div class="col-md-4 grid-col">
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
                                        }
                                        ?>
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
                                                <?php }
                                             ?>
                                        </div>                                        
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                        </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
get_footer();