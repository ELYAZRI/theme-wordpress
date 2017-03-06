<?php get_header(); ?>


	<div class="row">

		<div class="col-xs-12 col-md-7">

					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox">

					      <div class="item active">
					      	<?php echo '<img src="' . get_template_directory_uri() . '/img/Conception&Modélisation.jpg"  alt="" align="absmiddle"/>'; ?>
					        <!--img src="img_chania.jpg" alt="Chania" width="460" height="345"-->
					        <div class="carousel-caption">
					          <h3>Conception & Modélisation</h3>
					          <p></p>
					        </div>
					      </div>

					      <div class="item">
					        <?php echo '<img src="' . get_template_directory_uri() . '/img/Développement&Tests.jpg"  alt="" align="absmiddle"/>'; ?>
					        <!--img src="img_chania.jpg" alt="Chania" width="460" height="345"-->
					        <div class="carousel-caption">
					          <h3>Développement & Tests</h3>
					          <p></p>
					        </div>
					      </div>
					    
					      <div class="item">
					        <?php echo '<img src="' . get_template_directory_uri() . '/img/Déploiment&Maintenance.jpg"  alt="" align="absmiddle"/>'; ?>
					        <!--img src="img_chania.jpg" alt="Chania" width="460" height="345"-->
					        <div class="carousel-caption">
					          <h3>Déploiement & Maintenance</h3>
					          <p></p>
					        </div>
					      </div>

					    
					  
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					  </div>

		</div>

		 <div class="col-xs-7 col-sm-3 profil">
				<?php 
					$args = array( 
						'post_type' => 'page',
						'post__in'=>array('96')
					);
					$homeBlogs = new WP_Query( $args );
						if( $homeBlogs->have_posts() ){
						        $homeBlogs->the_post();
								the_title( sprintf('<h4 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h4>' ); 
								?><div class="excerpt"> <p> <?php the_excerpt(); ?> </p> </div><?php
					    }
					wp_reset_postdata();
				 ?>
				    <button type="button" class="btn btn-primary btn-sm readmore">Read more</button>
		</div> 
	</div>
	<br></br>
						
	<div class="row home-blocs">
						


		<?php for ($i = 1; $i <= 4; $i++) { ?>
		<div class="col-xs-7 col-sm-6 col-md-3 home-bloc">
					<?php 
					switch ($i) {
					    case 1:
					        $args = array( 
								'post_type' => 'page',
								'post__in'=>array('98')
								);
					        break;
					    case 2:
					        $args = array( 
								'post_type' => 'page',
								'post__in'=>array('100')
								);
					        break;
					    case 3:
					    	$args = array( 
								'post_type' => 'page',
								'post__in'=>array('102')
								);
					        break;
					    case 4:
					    	$args = array( 
								'post_type' => 'page',
								'post__in'=>array('104')
								);
					        break;
					}
							
							$homeBlogs = new WP_Query( $args );
					?>
				<div class="bloc-title">
					
						<?php
							if( $homeBlogs->have_posts() ): $homeBlogs->the_post();
									the_title(sprintf(
										'<h4 class="entry-title">
												<a href="%s">
													<p class="img-title">'.
				 									'<img src="' . get_template_directory_uri() . '/img/arrow-with-circle-right.svg"  alt="" align="absmiddle"/>'.
													'</p>'
												, esc_url( get_permalink() ) ),'</a></h4>' );
							
							
						?>
				</div>
				<div class="excerpt">
					<p> 
						<?php
							the_excerpt();
							endif; //fin de if
							wp_reset_postdata();
						
						?>
					</p>
				</div>
		</div>
		<?php }//fin du boucle for?>

	</div>


<?php get_footer(); ?>