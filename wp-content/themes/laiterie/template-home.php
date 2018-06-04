<?php /* Template Name: Home Template */ get_header(); ?>

		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<section class="container artiste-avant">
				<div class="row">
					<div class="col-lg-12 image-artiste-avant" style="background-image: url('<?php the_field('photo_artiste'); ?>')">
						<div class="gradient"></div>
						<div class="texte-artiste-avant wow fadeInUp">
							<p class="une">Artiste à la une</p>
							<hr>
							<h1><?php the_field('nom_artiste'); ?> <br> <span class="en-concert">EN CONCERT</span> </h1>
							<hr>
							<p class="date"><?php the_field('date_du_concert'); ?></p>
							<a class="btn-acheter-billet" href="<?php the_field('lien_btn'); ?>">Acheter un billet</a>
						</div>
					</div>
				</div>
			</section>
			<section class="programmation-miniature container">
				<h2>Programmation</h2>
				<div class="row wow fadeInUp">
						<?php
							$programmations = get_posts( array(
							    'posts_per_page' => 4,
							    'post_type' => 'programmations', // Type articles
							    'post_status' => 'publish', // statut public uniquement
							    'orderby' => 'post_date', // trier par date
							    'order' => 'ASC' // trier par date décroissante

							));

							foreach( $programmations as $programmation) {
							    // contenu à afficher
								echo '<div class="col-lg-3 one-prog position-relative"   style="background-image: url('.get_field('photo_miniature', $programmation->ID) . ' )">';
									echo '<div class="textes-prog position-absolute">';
								    	echo '<span class="date-prog">'.get_field('date_programmation' , $programmation->ID).'</span><br>';
											echo '<span class="artiste-prog">'.get_the_title($programmation->ID).'</span><br>';
											echo '<p><em>'.get_the_category($programmation->ID)[0]->cat_name.'</em></p>';
										echo '<div class="lieu-prog"> <img class="placeholder" src="http://localhost/laiterie/wp-content/uploads/2018/05/placeholder.png">'.get_field('lieu_programmation' , $programmation->ID).'</div>';
										echo '<a class="btn-acheter-billet" href="'.get_the_permalink($programmation->ID).'">Acheter un billet</a>';
									echo '</div>';
									echo '<div class="hover-artiste"></div>';
								echo '</div>';
							}
						 ?>
				</div>
				<a href="<?php the_permalink(8);?>" class="btn-toute-prog mx-auto">Toute la programmation</a>
			</section>
			<section class="a-propos container text-center" style="background-image: url('<?php the_field('fond-img'); ?>  ')">
				<div class="row wow fadeInUp">
					<div class="col-lg-12">
						<h2>À PROPOS</h2>
						<p>
							<?php the_field('texte_a_propos'); ?>
						</p>
						<a href="<?php the_permalink(10);?>" class="btn-acheter-billet">Nous contacter</a>
					</div>
				</div>
			</section>
			<section class="container partenaires wow fadeInUp">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-between align-items-center">
						<div class="logos-partenaires"> <img src="<?php the_field('logo_1'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_2'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_3'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_4'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_5'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_6'); ?>" alt=""> </div>
						<div class="logos-partenaires"> <img src="<?php the_field('logo_7'); ?>" alt=""> </div>
					</div>
				</div>

			</section>




		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->


<?php get_footer(); ?>
