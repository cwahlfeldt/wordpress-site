<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="shortcut icon" href="wp-content/uploads/favicon.ico" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <script type="text/javascript">
      window.onload=function() {
        toggle_visibility('hide-show'); // pass the ID
      }

      function toggle_visibility(id) 
      {
       var e = document.getElementById("hide-show");
       if(e.style.opacity == '1')
          e.style.opacity = '0';
       else
          e.style.opacity = '1';
      }
    </script>

</head>
<body onload="toggle_visibility('hide-show')" <?php body_class($class); ?>>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="masthead">
     
          <!-- **This is my header php stuff** -->
          <div id="headerimg">
  			 		<h1>
   				 		<a id="headerID" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
  			 		</h1>
  				</div>

          <div id="search">
          <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
            <img src="wp-content/uploads/2014/05/magnifyingGlass.png" />
              <input onfocus="stretchON()" onblur="stretchOFF()" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />

                  <!-- Press enter to search ////////////////////////////////////////-->
                  <script>
                    $('document').ready((function() {
                        $("form input").keypress(function (e) {
                            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                                $('button[type=submit] .default').click();
                                return false;
                            } else {
                                return true;
                            }
                        });
                    });
                  </script>
                  <!-- ////////////////////////////////////////////////////////// -->

                  <!-- elongates header text  when search bar has focus(NEATO!) // -->
                  <script type="text/javascript">
                  function stretchON() 
                  {
                      document.getElementById("headerimg").style.letterSpacing = "21px";
                  }
                  function stretchOFF() 
                  {
                      document.getElementById("headerimg").style.letterSpacing = "6px";
                  }
                  </script>
                  <!-- ////////////////////////////////////////////////////////// -->  

          </form>
        </div> 
      </div>
              <div id="access" class="about art code contact">
            <!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'hbd-theme' ) ?>"><?php _e( 'Skip to content', 'hbd-theme' ) ?></a></div>-->
            <?php #wp_page_menu( 'sort_column=menu_order' ); ?>
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
            <p class="botBar" class="FFSucks-fix"></p>
          </div> <!--#access-->
    </div>
          <!--#masthead-->

        <div id="main">
    

    