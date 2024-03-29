<?php
/*
Template Name: Challenge Detail
*/
?>
<?php 
get_header();
the_post();
?>

<script>
	$(document).ready(function(){
		$('tbody tr:odd').each(function(){
			$(this).addClass('odd');
		})
	})
</script>
<style>
ol li{margin-bottom:10px}
</style>
<?php get_header();?>
    <!-- Content Wrapper -->
<div id="challengePage">
    <div id="contentWrapper">
        <div id="homeBanner">
        	<div class="introContent">
			<?php				
			  $frontpage_id = get_page_by_path("home");
			  $homeBannerText = get_post_meta($frontpage_id->ID, "Challenge Banner Text", true);
			  $allContest = get_post_meta($frontpage_id->ID,'allcontestsURL', true);
			  if($homeBannerText != null) :
				echo apply_filters('the_content', $homeBannerText);
			  endif;?>
			</div>
        </div>
        <div class="main homeMain">
            <div class="sideBar">
		
                <div class="widget howToCompleteWidget post">
                   <?php 
						$page=get_page_by_path('how-to-compete');
						echo apply_filters('the_content', $page->post_content); 
					?>
                </div>
                <!-- howToComplete -->
                
				<div class="widget learnCrowdsourcingWidget post">
				 <?php
						$page=get_page_by_path('learn-crowdsourcing');
						echo apply_filters('the_content', $page->post_content); 
				 ?>	
				</div>
                <!-- howToComplete -->
            </div>
            <!-- sideBar -->
            <div id="contentArea" class="post">
             
			  
			   <div class="featuredBox registerBox">
				<div class="content">
					<?php	
						echo get_post_meta($frontpage_id->ID, "Box1 Text", true);
					?>
					
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box1 URL", true);?>"><span>Register Now</span></a>
			   </div>
			   
			   <div class="featuredBox learnBox">
				<div class="content">
					<?php
						echo get_post_meta($frontpage_id->ID, "Box2 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box2 URL", true);?>"><span>Learn More About CoECI</span></a>	
			   </div>
			   
			   <div class="featuredBox harvardBox">
				<div class="content">
					<?php
						echo get_post_meta($frontpage_id->ID, "Box3 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box3 URL", true);?>"><span>Learn More About Harvard-NTL</span></a>	
			   </div>
			   
			   <div class="clear"></div>
			   <?php echo apply_filters('the_content', $post->post_content); ;?>
            </div>
            <!-- contentArea -->
            <div class="clear"></div>
        </div>
        <!-- main -->
			
    </div>
<?php get_footer(); ?>