<?php get_header(); ?>

<div class="container mt-4 mb-5 pb-sm-4">
    <div class="row newsletter-header" id="newsletter-header">
        <div class="col-md-12">
            <div class="newletter-logo-header mb-2">
                <!--<img src="<?php //echo get_template_directory_uri(); ?>/static/img/integritystar-logo.png"
                    alt="IntegrityStar UCF Compliance &amp; Ethics Newsletter" /> -->
                <img src="https://compliance.ucf.edu/wp-content/themes/Compliance-Theme/static/img/integritystar-logo.png"
                    alt="IntegrityStar UCF Compliance &amp; Ethics Newsletter" width="500px" class="d-inline" />
                <h1 class="h5 d-inline pl-md-3">UCF Compliance &amp; Ethics Newsletter</h1>
            </div>
            <hr class="mb-5">
        </div>
    </div>
    <?php if ( have_posts() ): ?>
    <div class="row text-center">
        <?php while ( have_posts() ) : the_post(); ?>


        <article class="<?php echo $post->post_status; ?> post-list-item mb-4 col-md-6 col-lg-3">
            <a class="media-background-container gtm-section-links-cards d-block w-100 h-100 px-4 pt-5 hover-parent text-secondary hover-text-inverse text-decoration-none"
                href="<?php the_permalink(); ?>">
                <img src="https://www.ucf.edu/wp-content/blogs.dir/16/files/2016/12/undergraduate-card.jpg" alt=""
                    class=" media-background object-fit-cover hover-child hover-child-scale-up" data-object-fit="cover">
                <div class="media-background object-fit-cover bg-primary-t-1 hover-child hover-child-hide fade"
                    data-object-fit="cover"></div>

                <div class="media-background object-fit-cover bg-inverse-t-3 hover-child hover-child-show fade"
                    data-object-fit="cover"></div>

                <h3 class="h4 text-uppercase mt-5"><?php the_title(); ?></h3>
                <!--<div>I’m a high school senior or first-time-in-college student (FTIC) seeking a bachelor’s degree.</div> -->
                <span class="fa fa-2x fa-chevron-down hover-child hover-child-show fade mt-3 mb-3"
                    aria-hidden="true"></span>
            </a>

        </article>

        <?php endwhile; ?>

        <?php ucfwp_the_posts_pagination(); ?>
        <?php else: ?>
        <p>No results found.</p>
    </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>