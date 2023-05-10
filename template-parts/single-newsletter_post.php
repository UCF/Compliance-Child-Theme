<?php
if (have_posts()) : while (have_posts()) : the_post();

    // Check if there are rows in the repeater field 'newsletter_main_posts'
    if (have_rows('newsletter_main_posts')) :

        // Loop through the rows of the repeater field
        while (have_rows('newsletter_main_posts')) : the_row();

            // Get the post object from the sub-field 'newsletter_main_posts_post'
            $post_object = get_sub_field('newsletter_main_posts_post');

            // Check if the post object exists
            if ($post_object) :

                // Set up the post data for the post object
                setup_postdata($post_object);

                // Get the post title
                $post_title = get_the_title($post_object->ID);

                // Get the post title
                $custom_title = get_field('custom_post_display_title', $post_object->ID);

                //Display custom title if avaliable
                $display_title = !empty($custom_title) ? $custom_title : $post_title;


                // Get the post permalink
                $post_permalink = get_permalink($post_object->ID);

                // Get the 'the_custom_excerpt' field from the post object
                $custom_post_excerpt = get_field('custom_post_excerpt', $post_object->ID);

                // Display the post title, permalink, and 'the_custom_excerpt' field value ?>

                <div class="newsletter-post pt-5 pb-4">
                    <h2 class="h4"><a href=" <?php echo $post_permalink ?> "><?php echo $display_title ?></a></h2>
                    <div class="custom-excerpt"><?php echo $custom_post_excerpt ?></div>
                </div>
                <?php

                            // Reset the post data
                            wp_reset_postdata();

                        endif;

                    endwhile;

                else :

                    // No rows found in the repeater field
                    echo '<p>No posts found in the newsletter.</p>';

                endif;

            endwhile; endif;
