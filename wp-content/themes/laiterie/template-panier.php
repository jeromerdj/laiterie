<?php /* Template Name: Panier Template */ get_header(); ?>

<!-- section -->
<section class="panier-page">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                <div class="etapes">
                    <strong>1. Validation panier</strong>    &nbsp;&nbsp;   2. Identification&nbsp;&nbsp;       3. Facturation    &nbsp;&nbsp;    4. Paiement   &nbsp;&nbsp;    5. Confirmation</strong>
                </div>
                <div class="billets">Billet(s)</div>
                <div class="row infos">
                    <div class="col-lg-2 img-artiste">
                        <img src="<?php the_field('photo_miniature' , 39); ?> " alt="">
                    </div>
                    <div class="col-lg-10">
                        <strong> <p class="nom-artiste"><?php echo get_the_title(39); ?></p></strong>
                        <p class="prix">Prix : <?php the_field('tarif_en_ligne' , 39); ?>€</p>
                        <p>Quantité :  <select class="" name=""> <option value="valeur1" selected>1</option><option value="valeur2">2</option></select> </p>
                        <p>Total : <strong>27,5€</strong> </p>
                    </div>
                </div>
                <p><strong>Total : <span class="vert">27,5€</strong></span>
                 <a href="" class="btn-acheter-billet">Valider le panier</a></p>
                 <br><br>
                 <hr>
                 <div class="logos-paiements">
                     <img src="<?php the_field('logo_paiement-1'); ?> ">
                     <img src="<?php the_field('logo_paiement_2'); ?> ">
                 </div>
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
