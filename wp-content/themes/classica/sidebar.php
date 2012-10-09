<!--BEGIN #sidebar .aside-->
<div id="sidebar" class="aside">

		<div id="social_icons" class="widget clearfix">
			<h3 class="widget-title">Let's be friends!</h3>
			<a href="http://facebook.com/thehealthbits" id="facebook" target="_blank"></a>
			<a href="http://twitter.com/thehealthbits" id="twitter" target="_blank"></a>
			<a href="http://youtube.com/user/thehealthbits" id="youtube" target="_blank"></a>
		</div>
		
		<div class="widget">
			<h3 class="widget-title">New Video</h3>
			<div style="position: relative;">
				<!-- <img src="/wp-content/themes/classica/images/sidebar_video_overlay.png" style="position: absolute; top: 0; left: 0;" />
				<img src="/wp-content/themes/classica/images/new_video.jpg" /> -->
				<a href="/2012/10/07/tofu-eggless-salad/"><img src="/wp-content/themes/classica/images/sidebar_vid.jpg" /></a>
			</div>
		</div>
		
		<?php /* <div class="widget">
			<h3 class="widget-title">Resources</h3>
			<img src="/wp-content/themes/classica/images/sidebar_placeholder.png" />
			<img src="/wp-content/themes/classica/images/sidebar_placeholder.png" />
			<img src="/wp-content/themes/classica/images/sidebar_placeholder.png" />
		</div> */ ?>
	
	
	
	<?php 
	if(!is_page()) :
	/* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar() ) : ?>
		
	<?php		
		endif;
	else:
	/* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Page Sidebar') ) : ?>
						
						<?php
		endif;
	endif;
	?>

<!--END #sidebar .aside-->
</div>