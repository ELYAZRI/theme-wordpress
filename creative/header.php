<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	
	</head>
	
		
	<?php 
		if( is_front_page() ):
			$creative_classes = array( 'creative-class', 'my-class' );
		else:
			$creative_classes = array( 'no-creative-class' );
		endif;
	?>
	
	<body <?php body_class( $creative_classes ); ?>>
		
		<!-- container -->
	<div class="container">

		<!-- site-header -->
		<header class="site-header"> 

			<nav class="site-nav">
				
				<?php

				    $args = array(
					   'theme_location' => 'primary',
					   'walker' => new Walker_Nav_Primary(),
					   'echo' => true
					);
				?>
					<?php wp_nav_menu($args); ?>
				
			</nav>
		</header>
		<!-- /site-header -->