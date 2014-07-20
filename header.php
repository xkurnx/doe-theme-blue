<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php 
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    
        wp_title( '|', true, 'right' );
    
        // Add the blog name.
        bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    ?>
</title>

<script type="text/javascript">
// Locate the url of the proxy url.
var memberProxyUrl = 'http://www.topcoder.com/roadshow/wp-content/plugins/home-eoi-plugin/mcount.php';
</script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/social_widget.css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/screen.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css' />
<link type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/wordpress-default.css" rel="stylesheet" media="all" />
<!--[if lte IE 8]> 
        <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/screen-ie8.css" type="text/css" rel="stylesheet" media="screen" />
<![endif]--> 


<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.jcarousel.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/script.js"></script>

<?php wp_head(); ?>
</head>

<body>
<!-- wrapper -->
<div id="wrapper">
  <div id="innerWrapper"> 
    <!-- header -->
    <div id="header"> 
      <?php 
	  wp_nav_menu( 
        array(
          'container' => false,
          'theme_location' => '',
          'menu_class' => 'topMenu',
          'menu' => 'top'        
        ) 
      ); 
	  ?>
    	<a id="siteLogo" href="<?php bloginfo('url');?>">
        <?php
				$topLogo = get_option("topLogo");
				$isImageChecked = get_option("useUploadedImage");
				
				if($isImageChecked=="true" && $topLogo!=null) : 
				?>				
					<img src="<?php echo $topLogo; ?>" alt=""/>
				<?php
				else :
				?>
					<img src="<?php bloginfo("stylesheet_directory");?>/i/logo.png" alt=""/>
				<?php
				endif;
			?>
    	</a>
      
      
    </div>