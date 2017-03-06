

<footer  class="site-footer" >
	<div class="site-footer-top row">
		<div class="col-xs-0 col-sm-1"></div>
		<div class="col-xs-12 col-sm-7">
					<nav class="site-nav">
							<?php
							    $args = array(
								   'theme_location' => 'secondary',
								);
							?>
								<?php echo wp_nav_menu($args); ?>
					</nav>
			  
			<div class="col-xs-12 contact-me">
				<p >
					<?php
			 			echo '<img src="' . get_template_directory_uri() . '/img/home.svg"  alt="adresse"  />';
					?>
					97 BD Mansart, 21000 DIJON
				</p><p> 
					 <?php
			 			echo '<img src="' . get_template_directory_uri() . '/img/phone.svg"  alt="appeler moi"  />';
					?>
					+33.6.98.38.20.86 
				</p><p>
					<?php
			 			echo '<img src="' . get_template_directory_uri() . '/img/mail.svg"  alt="envoyer moi un e-mail"  />';
					?>
					kamal.elyazri@gmail.com
				</p>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 newsltr">
			<span>Newsletter</span> 
			<br><br>
			<?php get_template_part('newsletter'); ?>
		</div>
	</div>



	<div class="site-footer-bottom row">
		<div class="col-xs-0 col-sm-1"></div>
		<div class="col-xs-12 col-sm-7 copyr">
			
			<?php the_time('Y'); ?>  &copy;  <?php bloginfo('name'); ?>. All rights reserved.
			
		</div>
		<div class="col-xs-12 col-sm-4 folowm" >
			<span>Follow me </span>
			<!-- a href="#"><img src="wp-content/themes/creative/img/rss-cube.gif" alt="rss_icon"  /></a-->
			<?php
			 echo '<a href="https://www.facebook.com/kamal.elyazri"><img src="' . get_template_directory_uri() . '/img/facebook-with-circle.svg"  alt="facebook_icon"  /></a>';
			?>
			&nbsp
			<?php
			 echo '<a href="https://twitter.com/kamal_elyazri"><img src="' . get_template_directory_uri() . '/img/twitter-with-circle.svg"  alt="twitter_icon"  /></a>';
			?>
			&nbsp
			<?php
			 echo '<a href="https://www.linkedin.com/in/kamal-el-yazri-4a92a2109?trk=hp-identity-name"><img src="' . get_template_directory_uri() . '/img/linkedin-with-circle.svg"  alt="linkedIn_icon" /></a>';
			?>
					
			
		</div>
	</div>
</footer>

</div><!-- container -->

<?php wp_footer(); ?>

</body>
</html>