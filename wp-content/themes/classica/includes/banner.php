<div class="clearfix">
	
	<?php if(is_page(4)): ?>
		<img src="/wp-content/uploads/img/home.jpg" width="940" height="350" />
	<?php
		else:
		$cat = get_the_category();
	?>
		<img src="/wp-content/uploads/img/cat-<?php echo $cat[0]->cat_ID . '.jpg'; ?>" width="940" height="350" />
	<?php endif; ?>
	
	
	<div id="top_signup_container">
		<p>Get free health tips to create a healthy, happy life!</p>
		<form id="top_signup" class="signup_form">
			<input type="text" name="signup_name" />
			<input type="text" name="signup_email" />
			<input type="submit" class="submit_button" name="signup_submit" />
		</form>
	</div>
</div>