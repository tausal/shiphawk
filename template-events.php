<?php /*Template name: Events and Webinars*/ ?>
<?php get_header(); ?>
<?php get_template_part("partials/events/events", "hero"); ?>
<?php get_template_part("partials/events/events", "highlighted"); ?>
<?php get_template_part("partials/events/events", "filter"); ?>
<main>
    <div id="resources">
        <?php get_template_part("partials/events/events", "webinars"); ?>
        <?php get_template_part("partials/events/events", "events"); ?>
        <?php get_template_part("partials/events/events", "case"); ?>
        <?php get_template_part("partials/events/events", "downloadable"); ?>
        <?php get_template_part("partials/events/events", "videos"); ?>
    </div>
</main>
<?php get_footer(); ?>