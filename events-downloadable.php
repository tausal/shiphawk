<section class="events-assets has-background-color-and-both-waves">
    <h2 style="font-size: 58px; margin-top: 50px;">Assets</h2>
    <div class="events-assets-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'Assets',
            'paged' => 1,
        );

        $query = new WP_QUERY($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <?php $hasNewIcon = get_field("is_new");
                $row = $query->post_count; ?>

                <?php $webinarCta = get_field('webinar_cta'); ?>

                <!--<a href="/">-->
                <div class="highlighted-event-card">
                    <?php if($query->current_post == 0) : ?>
                    <div class="highlighted-event-card-image" style="background-image: url(<?php if (get_the_post_thumbnail()) {
                                                                                                echo the_post_thumbnail_url();
                                                                                            } else {
                                                                                                echo ("/wp-content/uploads/2023/01/weisser-distributing-hero.webp");
                                                                                            } ?>);">
                        <?php if ($hasNewIcon) : ?>
                            <div class="highlighted-event-card-new-badge">
                                <div class="highlighted-event-card-new-badge--container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.366" height="16.429" viewBox="0 0 29.366 26.429">
                                        <path d="M4.4,2.937A1.468,1.468,0,0,0,2.937,4.4V17.619A1.468,1.468,0,0,0,4.4,19.088H24.961a1.468,1.468,0,0,0,1.468-1.468V4.4a1.468,1.468,0,0,0-1.468-1.468ZM4.4,0H24.961a4.4,4.4,0,0,1,4.4,4.4V17.619a4.4,4.4,0,0,1-4.4,4.4H4.4a4.4,4.4,0,0,1-4.4-4.4V4.4A4.4,4.4,0,0,1,4.4,0Zm5.873,23.493h8.81a1.468,1.468,0,0,1,0,2.937h-8.81a1.468,1.468,0,1,1,0-2.937Z" fill="#003A49" />
                                    </svg>
                                    <p>NEW</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <? endif; ?>
                    <div class="highlighted-event-card-content">
                        <div class="highlighted-event-card-filters">

                            <div class="highlighted-event-card-filters--type">
                                <p><?php the_field("assets_filter"); ?></p>
                            </div>
                        </div>

                        <div class="highlighted-event-card-text">
                            <a href="<?php echo esc_url($webinarCta['webinar_cta_link']); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p> <?php the_content(); ?></p>
                        </div>
                        <!-- <div class="highlighted-event-card-cta">
                            <a href="<?php echo esc_url($webinarCta['webinar_cta_link']); ?>">
                                <?php echo esc_html($webinarCta['webinar_cta_text']); ?>
                            </a>
                        </div> -->
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <div style="margin-top: 50px; margin-bottom: 50px;">
        <a style="background: #EBBA16; color: white;
    padding: 15px 40px 15px 40px;
    border-radius: 5px;" id="load-more-assets">
            View All
        </a>
    </div>
</section>