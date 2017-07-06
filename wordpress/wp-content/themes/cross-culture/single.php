	<?php get_header();?>
	<div class="blank_head_box"></div>	
	<div class="headerphoto"></div>
			
	<!-- content-wrap starts here -->
	<div id="content-wrap container-fluid">
	<div class="banner_blog"></div>
	<div id="content" class="clearfix">		
		
		<!-- <?php get_sidebar();?> -->
	
		<div id="main">		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post">

			
				<h1><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h1>
				
				<p>Posted by <?php the_author_posts_link(); ?></p>

				<p><?php the_content("Read More..."); ?></p>
				
				<p class="post-footer align-right">					
					<a href="<?php the_permalink() ?>" class="readmore">更多</a>
					<?php comments_number('No Comment', '1 Comment', '% Comments' );?>
					<span class="date"><?php the_time('F d, Y') ?></span>	
				</p>
				
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>

				
			
						
										
		</div>					
		
	<!-- content-wrap ends here -->		
	</div></div>

<!-- footer starts here -->	
<?php get_footer();?>