<?php 
	
/*
	Template Name: Compétences Template
*/
	
get_header(); ?>

	<?php 
		
	$args = array('post_type' => 'post', 'post_per_page' => 5 );
	$loop = new WP_Query( $args );
	
	if( $loop->have_posts() ):
		
		while( $loop->have_posts() ): $loop->the_post(); ?>
			
			<?php get_template_part('content', 'archive'); ?>
		
		<?php endwhile;
		
	endif;
		
	wp_reset_postdata();
		
	?>

<?php get_footer(); ?>