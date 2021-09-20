<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 
        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
 
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <h1><?php echo the_title(); ?></h1>
 
                <?php endwhile; ?>
 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
 

<?php get_footer(); ?>  