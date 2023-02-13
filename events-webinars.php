<section class="events-webinars">
    <h2 style="font-size: 58px;" id="webinars-title">Webinars</h2>
    <div class="events-webinars-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'Webinars',
            'paged' => 1,
        );

        $query = new WP_QUERY($args);
        $row = $query->post_count;
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <?php $hasNewIcon = get_field("is_new");?>

                <?php $webinarCta = get_field('webinar_cta'); ?>

                <div class="highlighted-event-card">
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
                    <div class="highlighted-event-card-content">
                        <div class="highlighted-event-card-filters">
                            <?php $hasUpcomingBadge = get_field("include_upcoming"); ?>

                            <div class="highlighted-event-card-filters--type">
                                <p>Webinar</p>
                            </div>

                            <?php if (!$hasUpcomingBadge) : ?>
                                <div class="highlighted-event-card-filters--type">
                                    <p>Past</p>
                                </div>
                            <?php endif;?>

                            <?php if ($hasUpcomingBadge) : ?>
                                <div class='highlighted-event-card-filters--upcoming'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12">
                                        <g transform="translate(-1213 -809.5)">
                                            <path d="M4,2A2,2,0,0,0,2,4V8a2,2,0,0,0,2,2h6a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2Zm9.98,1.605L16,1.585A2,2,0,0,1,17.414,1H18a2,2,0,0,1,2,2V9a2,2,0,0,1-2,2h-.586A2,2,0,0,1,16,10.414L13.98,8.395A4,4,0,0,1,10,12H4A4,4,0,0,1,0,8V4A4,4,0,0,1,4,0h6a4,4,0,0,1,3.98,3.6ZM17.415,9H18V3h-.586l-3,3,3,3ZM5,8A1,1,0,1,1,6,7,1,1,0,0,1,5,8Z" transform="translate(1213 809.5)" fill="#EBBA16" />
                                        </g>
                                    </svg>
                                    <p>UPCOMING</p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="highlighted-event-card-text">
                            <a href="<?php echo esc_url($webinarCta['webinar_cta_link']); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <p> <?php if (get_the_content()) {
                                the_content();
                            } else {
                                echo ("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard");
                            }?></p>
                        </div>
                        <div class="highlighted-event-card-cta">

                            <a href="<?php echo esc_url($webinarCta['webinar_cta_link']); ?>">
                                <?php echo esc_html($webinarCta['webinar_cta_text']); ?>
                            </a>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <div style="margin-top: 85px;">
        <a style="background: #EBBA16; color: white;
    padding: 15px 40px 15px 40px;
    border-radius: 5px;" id="load-more-webinars" data-post-id="321">
            View All
        </a>
    </div>
</section>