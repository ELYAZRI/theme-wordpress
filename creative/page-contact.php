<?php 

get_header(); ?>
	

	<div id="contactbg">
		<div id="slide1">
		</div>
		<div id="slide2">
					<p>
						<p> Envoyer moi un email au: kamal.elyazri@gmail.com
						    ou appelez moi au: +33 0(6) 98 38 20 86. 
						</p>
						<p>
							Je reste à votre entière disposition pour de plus ample renseignements. 
						</p>
					</p>
		</div>
		<div id="slide3">
		</div>
	</div>
	
   <div id="contactform">
					<?php 
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile;
					endif;	
					?>
	</div>
	

	
		<script>
				function parallax(){
					var prlx_lyr_1 = document.getElementById('slide1');
					var prlx_lyr_2 = document.getElementById('slide2');
					var prlx_lyr_3 = document.getElementById('slide3');
					prlx_lyr_1.style.top = -(window.pageYOffset / 4)+'px';
					prlx_lyr_2.style.top = -(window.pageYOffset / 6)+'px';
					prlx_lyr_3.style.top = -(window.pageYOffset / 8)+'px';
				}
				window.addEventListener("scroll", parallax, false);
		</script>
<?php get_footer(); ?>

<?php /*
	<div id="slide1">
		<div class="slide-inside">
				<p>
					##########################
					##########################
					##########################
					##########################
				</p>
				
		</div>
	</div>

	<div id="slide2">
		<div class="slide-inside">
				<div >
					<?php 
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile;
					endif;	
					?>
				</div>
				
		</div>
	</div>
<div id="content_layer"> <script> for(var i=1; i < 10; i++){ document.write('<h1>This is dummy line '+i+'</h1>'); } </script> </div>

	*/?>

<?php /*
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
					
				*/?>