<?php
    $obj              = ucfwp_get_queried_object();
    $title            = ucfwp_get_header_title( $obj );
    $subtitle         = ucfwp_get_header_subtitle( $obj );
    $h1               = ucfwp_get_header_h1_option( $obj );
    $h1_elem          = ucfwp_get_header_h1_elem( $obj );
    $title_elem       = ( $h1 === 'title' ) ? $h1_elem : 'span';
    $subtitle_elem    = ( $h1 === 'subtitle' ) ? $h1_elem : 'p';
    $title_classes    = 'h1 d-block mt-3 mt-sm-4 mt-md-5 mb-2 mb-md-3';
    $subtitle_classes = 'lead mb-2 mb-md-3';
    ?>

<?php if ( $title ): ?>
<div class="container">
    <?php if( is_post_type_archive('newsletter') ||  is_singular( 'newsletter' )   ):  ?>
        <div class="row newsletter-header pt-3" id="newsletter-header">
            <div class="col-md-12">
                <div class="newletter-logo-header mb-2">
                    <?php $newsletter_logo = get_field( 'newsletter_logo', 'option' ); //get logo from settings screen ?>
                    <?php if ( $newsletter_logo ) : ?>
                        <img src="<?php echo esc_url( $newsletter_logo['url'] ); ?>" alt="<?php echo esc_attr( $newsletter_logo['alt'] ); ?> " width="500px" class="d-inline img-fluid" />
                    <?php endif; ?>              
                    <h1 class="h5 d-inline pl-md-3"><?php the_field( 'newsletter_headline', 'option' ); ?></h1>
                </div>
                <hr class="mb-5">
            </div>
        </div>
     <?php else: ?>

    <<?php echo $title_elem; ?> class="<?php echo $title_classes; ?>">
        <?php echo $title; ?>
    </<?php echo $title_elem; ?>
     <?php endif; ?> 

    <?php if ( $subtitle ): ?> <<?php echo $subtitle_elem; ?>
        class="<?php echo $subtitle_classes; ?>">
    <?php echo $subtitle; ?>
    </<?php echo $subtitle_elem; ?>>
    <?php endif; ?>
</div>
<?php endif; ?>