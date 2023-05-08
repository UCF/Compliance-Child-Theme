<?php get_header(); ?>

<div class="container newsletter-containter m mb-5 pb-sm-4">
    <div class="row">
        <div class="col-md-7 newsletter-primary-container pr-md-5">
            <?php get_template_part( 'template-parts/single-newsletter_post', 'Newsletter Post' ); // Display Newsletter Articles ?>
        </div>
        <div class="col-md-5 newsletter-sidebar-container  pl-md-5">
            <?php $spacing = 'pt-5 pb-4'; ?>
            <?php get_template_part( 'template-parts/single-newsletter_sidebar', 'Newsletter sidebar' ); //Display Sidebar  ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>