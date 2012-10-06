<?php
/*
Template Name: Home 2
*/
?>

<?php get_header(); ?>
<?php include("includes/banner.php"); ?>			


<div id="home_primary">	
	<?php 							
		$list_cat_ids = array(3,5,6,4);							
		$list_cat_names = array('Nutrition','Mind','Body','Beauty');							
		for($i = 0; $i < count($list_cat_ids); $i++):							
	?>	

	<!--BEGIN #recent-posts .home-recent -->
	<div id="recent-posts" class="home-recent clearfix <?php if($i == count($list_cat_ids) - 1) echo 'posts-wrap-last' ?>">			
								
		<!--BEGIN .recent-wrap -->
		<div class="recent-wrap">
		
		<h1><? echo $list_cat_names[$i] ?></h1>

		<?php		
			$start = 3; //Set the starter count		
			$finish = 1; //Set the finish count
		
			$query = new WP_Query();
			$query->query('posts_per_page='.get_option('tz_recent_number') . '&cat=' . $list_cat_ids[$i]);
		
			//Get the total amount of posts
			$post_count = $query->post_count;
			while ($query->have_posts()) : $query->the_post(); ?>
								
			<?php if(is_multiple($start, 3)) : /* if the start count is a multiple of 3 */ ?>
				<!--BEGIN .hentry-wrap -->
				<div class="hentry-wrap clearfix"> 
				<?php endif; ?>
		
					<!--BEGIN .hentry -->
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						
					<div class="post-thumb">
						<a title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><img src="/wp-content/uploads/img/<?php echo the_ID() . '-thumb.jpg'; ?>" /></a>
					</div>
																
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>"> <?php the_title(); ?></a>
					</h2>
								
					<!--BEGIN .entry-meta .entry-header-->
					<div class="entry-meta entry-header">
							<span class="published"><?php the_time( get_option('date_format') ); ?></span>
							<span class="meta-sep">&middot;</span>
							<span class="comment-count"><?php comments_popup_link(__('No Comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></span>
							<?php edit_post_link( __('edit', 'framework'), '<span class="edit-post">[', ']</span>' ); ?>					
					</div><!--END .entry-meta entry-header -->
				
					<!--BEGIN .entry-content -->
					<div class="entry-content">
							<?php the_excerpt(); ?>					
					</div><!--END .entry-content -->						
				
				</div><!--END .hentry-->  
				
				<?php if(is_multiple($finish, 3) || $post_count == $finish) : /* if the finish count is a multiple of 3 or equals the total posts */  ?>
					</div><!--END .hentry-wrap-->  
				<?php endif; ?>
				
				<?php
					$start++;
					$finish++;
					endwhile;
					wp_reset_query();
				?>								
				
				</div><!--END .recent-wrap -->
		
		
	</div><!--END #recent-posts .home-recent -->
	<?php endfor; ?>										
</div>
						
						
						
	
<?php include("sidebar.php"); ?>				
<?php get_footer(); ?>