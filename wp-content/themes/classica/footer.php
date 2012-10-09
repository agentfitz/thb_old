
		<!-- END #content -->
		</div>
        
			
			<script type="text/javascript">
			jQuery(document).ready(function($){
				$.getJSON('http://api.twitter.com/1/statuses/user_timeline/thehealthbits.json?count=1&callback=?', function(tweets){
					var tweet = tweets[0].text;
					if(tweet.length > 113){
						$("#tweet_text").html(tweet.substr(0, 114) + "...");
					}
					else{
						$("#tweet_text").html(tweet);
					}
				});
				
				var tweet_timeout;
				
				$("#tweet_container").click(function(){
					window.open("http://twitter.com/thehealthbits");
				}).hover(function(){
					clearTimeout(tweet_timeout);
					$(this).find("#tweeting").animate({ top: -36 }, 150).end().find("#tweet_text").css({ borderBottom: "1px dotted #fff" });
				},function(){
					var $birds = $(this).find("#tweeting"),
							$text = $(this).find("#tweet_text");							
					tweet_timeout = window.setTimeout(function(){
						$birds.animate({ top: -6 }, 150);
						$text.css({ borderBottom: 0 });
					}, 2000);
				});
			});
			</script>
				
				
    
    </div><!-- END #container -->
    
    <!-- BEGIN #footer-container -->
    <div id="footer-container">
		
    	
			<div id="tweet_wrapper">
				<div id="tweet_container" style="position: relative;">
					<img src="/wp-content/themes/classica/images/tweeting.gif" id="tweeting" width="150" height="35" />
					<p><span id="tweet_text"></span> &mdash; Cinthia, <a href="http://twitter.com/thehealthbits">@TheHealthBits</a></p>
					<img src="/wp-content/themes/classica/images/tweet_bird.png" id="tweet_bird" />
					<img src="/wp-content/themes/classica/images/tweet_triangle.png" id="tweet_triangle" />
				</div>
			</div>
			
        <!-- BEGIN #footer-widgets -->
    	<div id="footer-widgets">
        	
            <!-- BEGIN .widget-wrap -->
            <div class="widget-wrap clearfix">
						
								<a href="/2012/10/07/pumpkin-spice-body-scrub/"><img src="/wp-content/themes/classica/images/footer_video.jpg" /></a>
            	
                <div id="footer-form-container">
								
									<img src="/wp-content/themes/classica/images/bottom_signup_hdr.png" width="400" height="85" id="footer-form-hdr" />
									<h2>Live healthier with tips and recipes from Cinthia</h2>
										
									<form method="post" action="https://app.icontact.com/icp/signup.php" name="footer_signup_form" id="footer_signup_form" class="sign_up_form" accept-charset="UTF-8">
										<input type="hidden" name="redirect" value="<?php echo get_subscribe_thank_you_url() ?>">
										<input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">
										<input type="text" class="textField clearField fname" value="What's your name?" name="fields_fname" />			
										<input type="text" class="textField clearField email" value="Email address" name="fields_email" />
										<input type="submit" class="submit_button" name="signup_submit" value="jump in!" id="top_sign_up" />			
										<input type="hidden" name="listid" value="78754">
										<input type="hidden" name="specialid:78754" value="KMJ3">	
										<input type="hidden" name="clientid" value="261574">
										<input type="hidden" name="formid" value="6210">
										<input type="hidden" name="reallistid" value="1">
										<input type="hidden" name="doubleopt" value="0">
									</form>
								
								</div>
								
								
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
    
        <!-- BEGIN #footer
        <div id="footer" class="clearfix">
        
            <p class="copyright">&copy; Copyright <?php echo date( 'Y' ); ?>. Powered by The Health Bits.</p>
            
            <p class="credit"><?php if (get_option('tz_footer_text')) echo stripslashes(get_option('tz_footer_text')); ?></p>
        
        
        </div>END #footer -->
	
    <!-- END #footer-container -->
	</div>
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	

	<script type="text/javascript">	
		$(function(){
		
			$(".sign_up_form").submit(function(e){
				
				var $this = $(this),
						$email = $this.find(".email"),
						$fname = $this.find(".fname"),
						errors = [];
			
				if($email.val() === "" || $email.val() === "Email address"){
					errors.push("Whoops! Don't forget your email");
				}
				
				if($fname.val() ==="" || $fname.val() === "What's your name?"){
					errors.push("Whoops! Don't forget your first name");
				}
				
				console.log(errors);
				
				if(errors.length){
					for(var i = 0; i < errors.length; i++){
						alert(errors[i]);
					}
					e.preventDefault();
				}
			
			});
		
		
			$(".clearField").clearField();
		});
	</script>
	
	
			
<!--END body-->
</body>
<!--END html-->
</html>