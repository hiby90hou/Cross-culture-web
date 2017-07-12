<?php get_header();?>

<!--搜索栏End--><!--主体下Begin-->
    <div class="page_row">
    <div class="page_main_msg left">
    <div class="list_bar" style="width: 680px"> <?php wheatv_breadcrumbs(); ?>  </div>

    <div class="left_row" style="text-align: center"></div>
    <div class="left_row">
    <div class="list pic_news" style="margin-top: 5px">
    <div class="list_bar">//<?php wp_title('');?> </div>
    <div class="list_content"><div class="c1-body">
    
    

<?php if ($posts_perpage) { ?>
						<?php $postsperpage = $posts_perpage; ?>
                    <?php } else { ?>
                        <?php $postsperpage = 10; ?>
                    <?php } ?>
        	 
        	  <?php
						$categoryID=$cat;
						$wp_query = new WP_Query('cat=' . $categoryID. 'orderby=date&order=desc&posts_per_page='.$postsperpage.'&paged='.$paged); ?>
        	 


		<?php while (have_posts()) : the_post(); ?>
        
        <div class="c1-bline" style="padding:6px 0px;"><div class="f-left"><img src="<?php bloginfo('template_directory'); ?>/img/head-mark4.gif" align="middle" class="img-vm" border="0"/><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div><div class="f-right"><?php the_time('Y-m-d h:m:s') ?></div><div class="clear"></div></div>
        	
            <?php endwhile; ?>




    </div>
<div class="pagination">
<?php pagination($query_string); ?>
</div>
    <p></p>
    </div>
    <div class="list_content"></div>
    </div>
    <p></p>
    </div>
    </div>
    <?php include( TEMPLATEPATH . '/category_sidebar.php' ); ?> 
    <div style="clear: both"></div>
    </div>
    <!--主体下End--><!--友情链接Begin--><!--友情链接End--><!--页脚Begin-->
    <?php get_footer();?>
 <!--页脚End-->
  </body>


</html>