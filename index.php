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


<!--<h1>Hello, world!</h1>
    <div calss="row">
        <div class="col-12 col-sm-6 col-md-8">
            <article>
                <header class="entry-header content-justify">
                    <h5 class="entry-title"><a href="#" rel="bookmark">blog title</a></h5>
                    <span class="author">admin</span>
                    <span class="post-date"><time datetime="2020-09-24T07:34:55+01:00">24 September 2020</time></span>
                    <span class="categories">abc</span>
                </header>
                <img width="800" height="250" alt="" class="img-fluid" src="https://via.placeholder.com/700x250">
                <div class="item-content"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p><a href="#">Read more</a></p></div>
            </article>
            <article>
                <header class="entry-header content-justify">
                    <h5 class="entry-title"><a href="#" rel="bookmark">blog title</a></h5>
                    <span class="author">admin</span>
                    <span class="post-date"><time datetime="2020-09-24T07:34:55+01:00">24 September 2020</time></span>
                    <span class="categories">abc</span>
                </header>
                <img class="img-fluid" width="800" height="250" alt="" src="https://via.placeholder.com/700x250">
                <div class="item-content"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p><a href="#">Read more</a></p></div>
            </article>
            <article>
                <header class="entry-header content-justify">
                    <h5 class="entry-title"><a href="#" rel="bookmark">blog title</a></h5>
                    <span class="author">admin</span>
                    <span class="post-date"><time datetime="2020-09-24T07:34:55+01:00">24 September 2020</time></span>
                    <span class="categories">abc</span>
                </header>
                <img class="img-fluid" width="800" height="250" alt="" src="https://via.placeholder.com/700x250">
                <div class="item-content"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p><a href="#">Read more</a></p></div>
            </article>
        </div>
        <div class="col-6 col-md-4">dfgdfgdfg</div>
    </div>-->
<?php
get_footer();
