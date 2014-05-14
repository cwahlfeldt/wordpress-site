
<?php
/*
Template Name: code
*/
 get_header(); ?>
 
        <div id="container">
            <div id="content">
            <div id="inner-content">
             
               <?php
                if( is_page( 'code' )) {
                         query_posts( array( 'category_name' => 'code' ) );
                }
                ?>
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="post">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                    <?php the_content(); ?>
                    <?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
                  
					</div> 
					<p id="post-spacing"></p> 
                  <?php endwhile; else: ?>
                  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                  <?php endif; ?>
                </div>
                  
            </div><!-- #content -->
 
        </div>
<?php get_footer(); ?>