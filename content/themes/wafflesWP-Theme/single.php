<?php get_header(); ?>
 	<div id="wrapper">
        <div id="container">

            <div id="content">

              <div id="post">

				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
          
 			  </div>
 			 
            </div><!-- #content -->
            <p id="post-spacing"></p>
        </div><!-- #container -->
        <?php get_sidebar(); ?>

<?php get_footer(); ?>
