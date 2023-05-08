<?php 

$sidebarItems = array(
    array(
        'post'      => 'message_post',
        'heading'   => 'message_from_name',
    ),
    array(
        'post'      => 'spotlight_post',
        'heading'   => 'spotlight_header',
    ),
    array(
        'post'      => 'recognition_post',
        'heading'   => 'recognition_header',
    ),
    array(
        'post'      => 'new_policies_post',
        'heading'   => 'new_policies_header',
    ),
    array(
        'post'      => 'faqs_post',
        'heading'   => 'faqs_header',
    ),
    array(
        'post'      => 'next_edition_post',
        'heading'   => 'in_our_next_edition_header',
    ),

);


foreach ($sidebarItems as $item) {
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
                <img src="https://compliance.ucf.edu/wp-content/themes/Compliance-Theme/static/img/in-the-spotlight.png"
                    class="d-inline pr-md-2">
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