<div id="banner_outer" class="clearfix">
	<div id="banner_inner">
	
		<?php if(is_page(4) || is_page("contact")): ?>
			<img src="/wp-content/uploads/img/home.jpg" width="940" height="350" />
		<?php
			else:
			$cat = get_the_category();
		?>
			<img src="/wp-content/uploads/img/cat-<?php echo $cat[0]->cat_ID . '.jpg'; ?>" width="940" height="350" />
		<?php endif; ?>
		
		

	
	</div>
</div>

<!-- <div id="top_signup_outer">
	<div id="top_signup_inner">
		<p>Get free health tips to create a healthy, happy life!</p>	
		<form id="top_signup" class="signup_form">
			<input type="text" name="signup_name" />
			<input type="text" name="signup_email" />
			<input type="submit" class="submit_button" name="signup_submit" value="jump in!" />
		</form>
	</div>
</div> -->




<div id="top_signup_outer">
	<div id="top_signup_inner">
		<p>Get free digestable health tips to create a healthy, happy life!</p>
		<form method="post" action="https://app.icontact.com/icp/signup.php" name="top_signup_form" id="top_signup_form" class="sign_up_form" accept-charset="UTF-8">
			<input type="hidden" name="redirect" value="<?php echo get_subscribe_thank_you_url() ?>">
			<input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">
			<input type="text" class="clearField fname" value="What's your name?" name="fields_fname" />			
			<input type="text" class="clearField email" value="Email address" name="fields_email" />
			<input type="submit" class="submit_button" name="signup_submit" value="jump in!" id="top_sign_up" />			
			<input type="hidden" name="listid" value="78754">
			<input type="hidden" name="specialid:78754" value="KMJ3">	
			<input type="hidden" name="clientid" value="261574">
			<input type="hidden" name="formid" value="6210">
			<input type="hidden" name="reallistid" value="1">
			<input type="hidden" name="doubleopt" value="0">
		</form>
	</div>
</div>

