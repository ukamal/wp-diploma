<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wp-diploma</title>
	<!-- CSS -->

	<?php wp_head(); ?>
</head>
<body>

<main id="site-main-wrapper">
	<--header start-->
	<header class="navbar navbar-inverse">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->


	    	<?php 
	    	//displaying menu
	    	if( has_nav_menu( 'primary') ) ;
				wp_nav_menu( 
					array(
						'theme_location' => 'primary',
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'mainmenu',
						'menu_id' => 'nav',
						'menu_class' => 'nav navbar-nav'
						) 
					) ;
					endif;
				?>
	     
	  </div><!-- /.container-fluid -->
	</header>
		
	
