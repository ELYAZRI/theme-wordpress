<?php 

get_header(); ?>


				<div>
					<div class="row col-xs-12">
						<div class="col-sm-8 "> 
							<ul class="bxslider">
							  <li>
							  	<?php
						 	//		echo '<img src="' . get_template_directory_uri() . '/img/t.jpg"  alt="home_icon"  />';
								?>
							  </li>
							  <li>
							  	<?php
						 	//		echo '<img src="' . get_template_directory_uri() . '/img/t.jpg"  alt="home_icon"  />';
								?>
							  </li>
							  <li>
							  	<?php
						 	//		echo '<img src="' . get_template_directory_uri() . '/img/t.jpg"  alt="home_icon"  />';
								?>
							  </li>
							</ul>
						</div>
						<div class="col-sm-4 "> 

						</div>
					</div>
					<div class="row col-xs-12"> 

					</div>
				</div>


				<?php 
				$args = array('post_type' => 'page' );
				$loop = new WP_Query( $args );
				?>
				<div class="row">
					
					<div class="col-xs-12 ">
					    <?php 

						if( $loop->have_posts() ):
							
							while( $loop->have_posts() ): $loop->the_post(); ?>
							<div class="col-xs-12 col-sm-3 bloc">
			                       

								<?php
								  
									if( get_the_title()=="Compétences") : $position="pos1";
									elseif (get_the_title()=="Contact"):  $position="pos2";
									elseif (get_the_title()=="Compétences"): $position="pos3";
									elseif (get_the_title()=="Compétences"): $position="pos4";
									endif;
								?>
									
								<?php echo '<div class="title ' . $position . '"> ' ?>
									<?php the_title( sprintf('<a href="%s">', esc_url( get_permalink() ) ),'</a>' ); ?>
								<?php echo '</div>' ?>

								<div class="resum">
									<?php the_excerpt(); ?>
								</div>	
							</div>
							<?php endwhile;
							
						endif;
							
						?>
				    </div>
					
				</div>
			    <?php 
				wp_reset_postdata();
					
				?>

<?php get_footer(); ?>