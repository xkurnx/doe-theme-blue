<?php
/*
Template Name: Home
*/
$page=get_page_by_path('home');
?>
<?php get_header();?>
    <!-- Content Wrapper -->
<div id="homePage">
    <div id="contentWrapper">
      <div id="homeBanner">
      	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/i/home-banner.png" alt="" />
        <a id="btnRegisterVideo" href="https://www.topcoder.com/reg2/showRegister.action" target="_blank"></a>
        <div class="introContent">
        	<?php
                $homeBannerText = get_post_meta($page->ID, "Challenge Banner Text", true);
                if($homeBannerText!=null) :
                  echo $homeBannerText;
                endif;
              ?>
		</div>
        <div class="bannerRegisterContent">           
         New to TopCoder? Registering is quick and easy! If you would like to participate in this challenge, click the Register link to the right. You will fill out a quick form which will enable you to participate in any TopCoder contest.   
        </div>
		
      </div>
		<div id="videoOverview">
			<a class="btnWatch" href="javascript:;" onclick="popupYT('Mn0Iuui9v5w','Video Overview')">Challenge Overview Video</a> 
			<div class="intro center">A simple and short introduction to Wave Energy Conversion devices and the unique aspects of this challenge. </div>
		</div>
	  
		<div id="contentArea" class="post">
               <div class="featuredBox registerBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box1 Text", true);
					?>
					
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box1 URL", true);?>"><span>Register Now</span></a>
			   </div>
			   
			   <div class="featuredBox learnBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box2 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box2 URL", true);?>"><span>Learn More About CoECI</span></a>	
			   </div>
			   
			   <div class="featuredBox harvardBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box3 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box3 URL", true);?>"><span>Learn More About Harvard-NTL</span></a>	
			   </div>
			   
			   <div class="clear"></div>
			   <?php the_content();?>
            </div>
	  
    </div>
</div>
<?php get_footer(); ?>