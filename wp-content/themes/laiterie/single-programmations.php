<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
    		<article class="container artiste-solo">
                <div class="row">
                    <div class="image-couv col-lg-12">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
    			<h1><?php the_title(); ?></h1>
                <div class="row infos-texte">
                    <div class="col-lg-4 cadre-achat wow fadeInLeft">
                        <p class="date"> <?php the_field('date_programmation'); ?> </p>
                        <p class="nom-artiste"><?php the_title(); ?> </p>
						<p><em><?php echo get_the_category()[0]->cat_name; ?></em></p>
                        <p class="lieu"> <img class="placeholder" src="http://localhost/laiterie/wp-content/uploads/2018/05/placeholder.png"> <?php the_field('lieu_programmation'); ?> </p>
                        <hr>


                        <p>Présenté par ARTEFACT PRL</p>
                        <p>
                            <strong>LOCATION</strong> <br>
                            Points de vente habituels : <?php the_field('prix_habituels'); ?>€ + frais <br>
                            <strong>Tarif sur notre billeterie en ligne : <span class="prix-en-ligne"><?php the_field('prix_habituels'); ?>€</span></strong>
                        </p>
                        <p>
                            <strong>CAISSE DU SOIR</strong><br>
                            Tarif unique : <?php the_field('tarif_soir'); ?>€
                        </p>
                        <p> <a href="#" class="btn-acheter-billet">Acheter un billet</a> </p>
                    </div>
                    <div class="col-lg-8 partie-texte wow fadeInRight">
                        <?php the_content(); ?>
                    </div>
                </div>
                <a class="retour-prog" href="<?php the_permalink(8);?> ">← Retour à la programmation</a>

				<section class="programmation-miniature container">
							<?php
								$programmations = get_posts( array(
									'posts_per_page' => 4, // -1 pour afficher tous les articles
									'post_type' => 'programmations', // Type articles
									'post_status' => 'publish', // statut public uniquement
									'orderby' => 'post_date', // trier par date
									'order' => 'ASC', // trier par date décroissante
									'category' => get_the_category()[0]->cat_ID, // APPELER SEULEMENT LE CONTENU PROPRE A UNE CATEGORIE DE LA PAGE
									'exclude' => get_the_ID(), // EXCLURE LE MEME CONTENU

								));
								if($programmations) {
									echo '<h2>CE QUE VOUS AIMEREZ AUSSI</h2>';
									echo '<div class="row">';
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

									echo '</div>';
									echo '<a href="'.get_the_permalink(8).'" class="btn-toute-prog mx-auto">Toute la programmation</a>'; // DANS UN ECHO ON RAJOUTE GET
								}
							 ?>


				</section>

    		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
