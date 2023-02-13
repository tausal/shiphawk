<section class="events-videos has-footer-below">
    <h2 style="font-size: 58px; margin-bottom: 50px;">Videos</h2>
    <div class="events-videos-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => 'Videos',
            'paged' => 1,
        );

        $query = new WP_QUERY($args);
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>

                <div class="highlighted-event-card">
                    <div class="highlighted-event-card-content" style="display: grid; grid-template-columns: auto auto; gap:20px;">
                        <?php the_content(); ?>
                    </div>
                </div>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

    <!-- <div style="margin-top: 50px;">
        <a style="background: #EBBA16; color: white;
    padding: 15px 40px 15px 40px;
    border-radius: 5px;" id="load-more-videos">
            View All
        </a>
    </div> -->
</section>