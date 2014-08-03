<?php get_header(); ?>
<div id="primary" class="content-area">
        <div id="content" class="site-content" >

        <?php
                if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) :
                                the_post();
                                the_title();
                                the_content();

                        endwhile;

                endif;
        ?>

        </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
