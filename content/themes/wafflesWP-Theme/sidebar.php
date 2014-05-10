<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
        <div id="primary" class="widget-area">
        
                <div id="toggle-button">
                    <a id="hideshow" onclick="toggle_visibility('hide-show')">&nbsp;</a>
                </div>
         <div id="hide-show">

            <div id="social-access">
                <a href="https://www.facebook.com/cwahlfeldt" target="_blank"><img src="shared/content/uploads/facebook1.png" /></a>
                <a href="https://plus.google.com/116075397322993264768/about" target="_blank"><img src="shared/content/uploads/google1.png" /></a>
                <a href="https://www.linkedin.com/profile/view?id=264702256&trk=nav_responsive_tab_profile" target="_blank"><img src="shared/content/uploads/linkedin1.png" /></a>
                <a href="https://twitter.com/ChrisWahlfeldt" target="_blank"><img src="shared/content/uploads/twitter1.png" /></a>
            </div>

            <ul class="xoxo">
              <div id="inner-sidebar">
                <?php dynamic_sidebar('primary_widget_area'); ?>
              </div>
            </ul>
            
          </div>
        </div><!-- #primary .widget-area -->
<?php endif; ?>       
 
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
        <div id="secondary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('secondary_widget_area'); ?>
            </ul>
        </div><!-- #secondary .widget-area -->
<?php endif; ?>