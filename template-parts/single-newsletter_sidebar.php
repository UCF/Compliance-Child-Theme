<?php 

$sidebarItems = array(
    array(
        'post'      => 'message_post',
        'heading'   => 'message_from_name',
        'icon'      => '',
    ),
    array(
        'post'      => 'spotlight_post',
        'heading'   => 'spotlight_header',
        'icon'      => 'newsletter_spotlight_icon',
    ),
    array(
        'post'      => 'recognition_post',
        'heading'   => 'recognition_header',
        'icon'      => 'newsletter_recognition_icon',
    ),
    array(
        'post'      => 'new_policies_post',
        'heading'   => 'new_policies_header',
        'icon'      => 'newsletter_policies_icon',
    ),
    array(
        'post'      => 'faqs_post',
        'heading'   => 'faqs_header',
        'icon'      => 'newsletter_faqs_icon',
    ),
    array(
        'post'      => 'next_edition_post',
        'heading'   => 'in_our_next_edition_header',
        'icon'      => 'newsletter_edition_icon',
    ),

);


foreach ($sidebarItems as $item) {
    if (isset($item['post']) && isset($item['heading'])) { // Check of there is a heading and content
        foreach ($item as $key => $value) {
            $$key = $value;
        }
        $message_post = get_field( $post ); 
        if ( $message_post ) : ?>



            <div class="sidebar-item is-message ">
                <?php if($post == 'message_post'): ?>
                <h2 class="message-from-title"><span>A message from</span><?php the_field( $heading ); ?></h2>
                <?php else: ?>

                <div class="sidebar-header mb-3">
                <?php if( $icon ): ?>
                    <?php $newsletter_icon = get_field( $icon , 'option' ); ?>
                        <?php if ( $newsletter_icon ) : ?>
                            <img src="<?php echo esc_url( $newsletter_icon['url'] ); ?>" alt="<?php echo esc_attr( $newsletter_icon['alt'] ); ?>" class="d-inline pr-md-2 newsletter-icon" />
                        <?php endif; ?>
                <?php endif; ?>
                    <h2 class="faqs-title is-title d-inline"><?php the_field( $heading ); ?></h2>
                </div>

                <?php endif; ?>
                <?php
                        $post = $message_post;
                        setup_postdata( $post ); ?>

                <div class="message-excerpt">
                    <?php the_field('custom_post_excerpt'); ?>
                </div>

                <a href="<?php the_permalink(); ?>">
                    <div class="read-more h5">Read more >></div>
                </a>
    </div>
    <?php wp_reset_postdata();
        endif;
    }

}