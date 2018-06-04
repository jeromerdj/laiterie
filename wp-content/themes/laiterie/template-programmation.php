<?php /* Template Name: Programmation Template */ get_header(); ?>

<!-- section -->
<section class="page-prog">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container chez-vous">
        <div class="row">
            <div class="col-lg-12 image-chez-vous" style="background-image: url('<?php the_field('photo_chez_vous'); ?>')">
                <div class="accroche wow fadeInUp">
                    <?php the_field('accroche'); ?>
                </div>
                <div class="arrow-bottom position-absolute">
                    <img src="http://localhost/laiterie/wp-content/uploads/2018/05/arrow-bottom.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="programmation-miniature container">
        <h1 class="programmation-h1">Programmation</h1>
        <p class="filtre text-center">Filtrer les événements ↓</p>
        <div class="row wow fadeInUp">
                <?php
                    $programmations = get_posts( array(
                        'posts_per_page' => 8, // -1 pour afficher tous les articles
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
    </section>
    <section class="jouer-laiterie d-flex container justify-content-center align-items-center"  style="background-image: url('<?php the_field('image_fond_jouer'); ?>  ')">
        <div class="row">
            <div class="text-center wow fadeInUp">
                <p> <?php the_field('texte_jouer_laiterie'); ?> </p>
                <a href="http://localhost/laiterie/contact/" class="btn-acheter-billet nous-contacter mx-auto">Nous contacter</a>
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
