<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
        <div id="primary" class="widget-area">
        
                <div id="toggle-button">
                    <a id="hideshow" onclick="toggle_visibility('hide-show')">&nbsp;</a>
                </div>
         <div id="hide-show">
         <div id="social-access">
                <p class="FFSucks-fix">&nbsp;</p>
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