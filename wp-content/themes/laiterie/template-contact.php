<?php /* Template Name: Contact Template */ get_header(); ?>

<!-- section -->
<section class="page-prog">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="container contact-form">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1><?php the_title(); ?></h1>
                <?php echo do_shortcode('[contact-form-7 id="101" title="Formulaire"]'); ?>
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
