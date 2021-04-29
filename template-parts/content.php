<?php
/**
 * Content template
 *
 * @package Threesixty
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="content">
        <header class="entry-header content-justify">
                    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <span class="author"><?php the_author(); ?></span>
            <span class="post-date"><?php echo get_the_date(); ?></span>
            <span><?php the_category(); ?></span>
                </header>
        <?php
        
        if( has_post_thumbnail() ):
	        ?>
            <!--post thumbnal options-->
            <div class="image-wrap">
                <div class="post-thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo fly_get_attachment_image( get_post_thumbnail_id(), 'blog_single_img' ); ?>
                    </a>
                </div><!-- .post-thumb-->
            </div>
            
        <?php endif; ?>
            
            <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'threesixty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->
    </div>

	

</article><!-- .post -->