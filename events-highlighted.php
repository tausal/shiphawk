<section class="events-highlighted">
    <div class="highlighted-wrapper">
        <?php if (have_rows("highlighted_events")) : ?>
            <?php while (have_rows("highlighted_events")) : the_row(); ?>
                <?php $hasNewIcon = get_sub_field('is_new'); ?>
                <div class="highlighted-event-card">
                    <div class="highlighted-event-card-image" style="background-image: url(<?php the_sub_field('highlighted_event_image'); ?>);">
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
                            <div class="highlighted-event-card-filters--type">
                                <p><?php the_sub_field("highlighted_event_filters"); ?></p>
                            </div>
                            <?php $hasUpcomingBadge = get_sub_field("include_upcoming");
                            if ($hasUpcomingBadge) : ?>
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
                            <a href="<?php the_sub_field("highlighted_event_cta_link"); ?>" style="color: #003A49">
                                <h2><?php the_sub_field("highlighted_event_title"); ?></h2>
                            </a>

                            <p><?php the_sub_field("highlighted_event_summary"); ?></p>
                        </div>
                        <div class="highlighted-event-card-cta">
                            <a href="<?php the_sub_field("highlighted_event_cta_link"); ?>" style="color: white;">
                                <?php the_sub_field("highlighted_event_cta_text"); ?>
                            </a>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>