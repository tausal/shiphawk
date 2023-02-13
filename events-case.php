<section class="events-case block-cta-cs">
    <h2 style="margin-top: 50px; margin-bottom: 50px; font-size: 58px;">Case Studies</h2>
    <div class="events-case-wrapper block-container block-has-bg" style="background-image: url(/wp-content/uploads/2023/01/weisser-distributing-hero.webp);">
        <?php
        $sub_cats = get_term_children(15183, 'category');
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'category_name' => 'case-studies',
            'paged' => 1,
            'post_parent' => 15183,
        );

        $query = new WP_QUERY($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

                <?php $webinarCta = get_field('webinar_cta'); ?>
                <!--<div class="bg-overlay-1"></div>-->
                <div class="events-case-content">
                    <h2 style="font-size: 58px;">
                        <?php the_title(); ?>
                    </h2>
                    <p>
                        <?php
                        the_excerpt();
                        ?>
                    </p>
                    <div style="margin-top: 50px;">
                        <a style="background: #EBBA16; color: white;
                        padding: 15px 40px 15px 40px;
                        border-radius: 5px;" href="<?php the_permalink(); ?>">
                            Read Case Study
                        </a>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <div style="margin-top: 50px;">
        <a style="background: #EBBA16; color: white;
    padding: 15px 40px 15px 40px;
    border-radius: 5px;" id="load-more-cases">
            View All
        </a>
    </div>
</section>