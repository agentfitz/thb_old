
		<!-- END #content -->
		</div>
        
			
			<script type="text/javascript">
			jQuery(document).ready(function($){
				$.getJSON('http://api.twitter.com/1/statuses/user_timeline/thehealthbits.json?count=1&callback=?', function(tweets){
					$("#tweet_text").html(tweets[0].text);
				});
			});
			</script>
				
				
			<div id="tweet_container">
				<p><span id="tweet_text"></span> &mdash; Cinthia, <a href="http://twitter.com/thehealthbits">@TheHealthBits</a></p>
				<img src="/wp-content/themes/classica/images/tweet_bird.png" id="tweet_bird" />
				<img src="/wp-content/themes/classica/images/tweet_triangle.png" id="tweet_triangle" />
			</div>
    
    </div><!-- END #container -->
    
    <!-- BEGIN #footer-container -->
    <div id="footer-container">
		
    	
        <!-- BEGIN #footer-widgets -->
    	<div id="footer-widgets">
        	
            <!-- BEGIN .widget-wrap -->
            <div class="widget-wrap clearfix">
						
								<img src="/wp-content/themes/classica/images/footer_video.jpg" />
            	
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                	
                    <?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer One' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Two' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Three' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Four' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
            
            <!-- END .widget-wrap -->
       		</div>
            
        <!-- END #footer-widgets -->
        </div>
    
        <!-- BEGIN #footer -->
        <div id="footer" class="clearfix">
        
            <p class="copyright">&copy; Copyright <?php echo date( 'Y' ); ?>. <?php _e('Powered by', 'framework') ?> <a href="http://wordpress.org/">WordPress</a>.<br /><a href="http://www.premiumpixels.com/classica">Classica Theme</a> by <a href="http://www.premiumpixels.com">Orman Clark</a></p>
            
            <p class="credit"><?php if (get_option('tz_footer_text')) echo stripslashes(get_option('tz_footer_text')); ?></p>
        
        <!-- END #footer -->
        </div>
	
    <!-- END #footer-container -->
	</div>
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
			
<!--END body-->
</body>
<!--END html-->
</html>