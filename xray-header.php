<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
<!-- ufl-template chem1 header -->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class($class); ?>>
		<ul class="screen-reader-text">
			<li><a href="http://assistive.usablenet.com/tt/<?php if (is_home()) { echo esc_url(home_url()); } else { echo esc_url(get_permalink( $post->ID )); } ?>" accesskey="t" title="Text-only version of this website">Text-only version of this website</a></li>
			<li><a href="#content" accesskey="s" title="Skip navigation">Skip navigation</a></li>
			<li><a href="<?php bloginfo( 'url' ); ?>" accesskey="1" title="Home page">Home page</a></li>
			<li><a href="<?php bloginfo( 'url' ); ?>/#secondary" accesskey="2" title="what's new">What's new</a></li>
			<li><a href="#search" accesskey="4" title="Search">Search</a></li>
			<?php $webmaster_email = of_get_option("opt_webmaster_email"); if( !empty($webmaster_email) && ufl_check_email_address($webmaster_email) ) { echo "<li><a id=\"contact-webmaster-srt\" accesskey=\"6\" href=\"mailto:".$webmaster_email."\">Contact Webmaster</a></li> "; } else { echo "<li><a id=\"contact-webmaster-srt\" accesskey=\"6\" href=\"".$webmaster_email."\">Contact Webmaster</a></li> "; } ?>
			<li><a href="#footer-links" accesskey="8" title="Website policies">Website policies</a></li>
			<li><a href="http://www.ufl.edu/disability/" accesskey="0" title="Disability services">Disability services</a></li>
		</ul>

  <?php include(get_theme_root() . '/' . get_stylesheet() . '/library/php/uf-chemistry-nav.php');  ?>

	<header role="banner">
	  <div class="container">
<a href="http://www.chem.ufl.edu"><img class="chemlogo" src="<?php print(get_stylesheet_directory_uri()); ?>/images/chem_logo_414x70.png" width="414" height="70" /></a>

<div style="position:absolute; top:70px; left:68px; width:300px; height:77px"><img src="/wp-content/uploads/sites/20/2015/03/cxctitle_small1-e1426264605981.png" width="300"  height="77" alt="Center for Xray Crystallography" /></div>


		
		<ul id="header-social">
			<li><a href="<?php ufandshands_get_socialnetwork_url("facebook"); ?>" class="facebook ir" target="_blank">Facebook</a></li>
			<li><a href="<?php ufandshands_get_socialnetwork_url("twitter"); ?>" class="twitter ir" target="_blank">Twitter</a></li><!--
			<li><a href="<?php ufandshands_get_socialnetwork_url("youtube"); ?>" class="youtube ir" target="_blank">Youtube</a></li>-->
		</ul>
		<div id="header-search-wrap">
			<?php if(has_nav_menu('header_links')) { //detects if the header_links menu is being used ?>
			  <nav id="utility-links" class="span-7half" role="navigation">
				<ul><?php wp_nav_menu( array('theme_location' => 'header_links', 'container' => false )); ?></ul>
			  </nav>
			<?php } ?>
		  <div id="searchform-wrap" style="padding-left:0px; margin-left:0px">
		  	<?php $opt_search_box_text = of_get_option("opt_search_box_text"); ?>
			<?php $opt_use_wp_search = of_get_option("opt_use_wp_search"); if(!empty($opt_use_wp_search)) { ?>
			<form method="get" id="searchform" action="<?php echo home_url('/'); ?>" role="search">
				<input type="text" value="<?php if (!empty($opt_search_box_text)) { echo $opt_search_box_text; } else { echo 'Search This Site'; }?>" id="header-search-field" name="s" />
				<input type="image" src="<?php print(get_stylesheet_directory_uri()); ?>/images/header-search-btn-orange.jpg" id="header-search-btn"  alt="Search Button" name="sa" />
			</form>
			<?php } else { ?>
			<form method="get" id="searchform" action="http://search.ufl.edu/search" role="search">
				<input type="hidden" name="source" id="source" value="web">
				<?php $opt_site_specific_search = of_get_option("opt_site_specific_search"); if(!empty($opt_site_specific_search)) { ?>
				<input type="hidden" name="site" id="site" value="<?php $parsed_url = parse_url( home_url() ); echo $parsed_url['host']; if ( $parsed_url['path'] ) { echo $parsed_url['path']; } ?>">
				<?php } ?>
				<input type="text" value="<?php if (!empty($opt_search_box_text)) { echo $opt_search_box_text; } else { echo 'Search UF Web'; } ?>" id="header-search-field" name="query" />
				<input type="image" src="<?php print(get_stylesheet_directory_uri()); ?>/images/header-search-btn-orange.jpg" id="header-search-btn"  alt="Search Button" name="sa" />
			</form>
			<?php } ?>
		  </div>
		</div><!-- end header-search-wrap -->
<p class="clearfloat">&nbsp;</p>
		<!-- begin website title logic -->
			<?php
			##Remove site title and replace it with CXC graphic next to chem logo above, for
			##  template /themes/uf-template-page-with-xray-header.php 
			##php ufandshands_site_title();
			##<img src="/wp-content/uploads/sites/20/2015/02/cxctitle.png" width="300"  height="77" alt="Center for Xray Crystallography" />
			?>

		<!-- end website title logic -->

		<?php // orange header action item box
		
			$actionitem_text = of_get_option(opt_actionitem_text);
			$actionitem_url = of_get_option(opt_actionitem_url);
		
			if (!empty($actionitem_text)) {
				echo "<a id='header-actionitem' href='".$actionitem_url."'>".$actionitem_text."</a>";
			}
		
		?>
		
	  </div><!-- end header .container -->
	</header>

	<?php include(get_theme_root() . '/' . get_template() . '/library/php/menu.php'); //menu logic ?>