<section class="events-filter">
    <div class="events-filter-wrapper">
        <h2 style="color: white;">Browse Our Resources</h2>
        <div class="events-filter-wrapper__fields">
            <form class="js-filter-form">
                <select name="categories">
                    <?php
                    $cat_args = array(
                        'exclude' => array(1),
                        'option_all' => 'All'
                    );
                    $categories = get_categories($cat_args);
                    $resource_ids = array(314, 318, 319, 320, 321);
                    ?>
                    <option value="0">All</option>
                    <?php foreach ($categories as $cat) : ?>
                        <?php if(in_array($cat->term_id, $resource_ids)) : ?>
                        <option value="<?= $cat->term_id; ?>" class="js-filter-item">
                            <?= $cat->name; ?>
                        </option>
                        <? endif; ?>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
    </div>
</section>