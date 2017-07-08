<?php
/**
* Template Name:contact us
*
* @package WordPress
* @subpackage Crosscultures
* @since Crosscultures 1.0
*/ 
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php get_header();?>
    <div class="blank_head_box">
    	<h1><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h1>
    </div>
	<div class="headerphoto"></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	<div class="banner_blog"></div>
	<div id="content" class="clearfix">		
		
		<!-- <?php get_sidebar();?> -->
	
		<div id="main" class="mainNoSide">		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post">

			
				
				
				<!-- <p>Posted by <?php the_author_posts_link(); ?></p> -->

				<p><?php the_content("Read More..."); ?></p>
			   <div id="map">
			        <button type="button" class="btn btn-success" id="location"><a href="" >Find us on Google Map!</a></button>
			        <iframe class='googlemap' frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Cross%20Cultrues&key=AIzaSyC9_YN1loCTLcOn7hiQv3I1ZD5CPhpfheU" allowfullscreen></iframe>
			    </div>
				
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>

 

				
			
						
										
		</div>					
		
	<!-- content-wrap ends here -->		
	</div></div>

<!-- footer starts here -->	
<?php get_footer();?>
 <script>
        var locationBtn = document.querySelector('#location');
        var maplink = locationBtn.querySelector('a');

        if (isPC()) {
            maplink.href = "https://www.google.com.au/maps/place/Cross+Cultures/@-37.7964867,144.9651053,17z/data=!3m1!4b1!4m5!3m4!1s0x6ad642d611c8b9ef:0xd150bbfd85d3a5a1!8m2!3d-37.796491!4d144.967294?hl=en";
        } else {
            maplink.href = "geo:0,0?z=17&q=Cross+Cultures";
        }

        function isPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"
            ];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }
    </script>