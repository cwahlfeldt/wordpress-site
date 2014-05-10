<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
              
 				<div id="post">
				<?php if ( have_posts() ) : ?>

				                <h1 class="page-title"><span><?php the_search_query(); ?></span></h1>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>   
				</div>                         
				<p id="post-spacing"></p>

				<?php while ( have_posts() ) : the_post() ?>
							<div id="post">
				                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php if ( $post->post_type == 'post' ) { ?>
				                    <div class="entry-meta">
				                        <!-- <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
				                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
				                        <span class="meta-sep"> | </span> -->
				                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				                    </div><!-- .entry-meta -->
				<?php } ?>

				                    <div class="entry-summary">
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				                    </div><!-- .entry-summary -->


				                </div><!-- #post-<?php the_ID(); ?> -->
				            </div>
				            <p id="post-spacing"></p>
				<?php endwhile; ?>          

				<?php else : ?>

				                <div id="post-0" class="post no-results not-found">
				                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'hbd-theme' ) ?></h2>
				                    <div class="entry-content">
				                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'hbd-theme' ); ?></p>
				    <?php get_search_form(); ?>
				                    </div><!-- .entry-content -->
				                </div>

				<?php endif; ?>           
            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->
 
<?php get_footer(); ?>