<?php
/**
 * Main template file
 * 
 * @package Threesixty
 */
get_header();
?>

<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
        <?php if (is_home() && !is_front_page()) : ?>
           <header class="page-header">
               <h1 class="page-title"><?php single_post_title(); ?></h1>
           </header>        
	<?php endif; ?>
       <div calss="row">
           <div class="col-12 col-sm-6 col-md-8">

               <?php
               if (have_posts()) :
                   // Start the Loop.
                   while (have_posts()) : 
                       the_post();

                       /*
                        * Include the Post-Format-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Format name) and that
                        * will be used instead.
                        */
                       get_template_part('template-parts/content', get_post_format());

                   endwhile;                   

               else :

                   get_template_part('template-parts/content', 'none');

               endif;
               ?>
           </div>
           <div class="col-6 col-md-4">
               <?php get_sidebar(); ?>
           </div>
       </div>
		</main><!-- .site-main -->
</div>

<?php
get_footer();
