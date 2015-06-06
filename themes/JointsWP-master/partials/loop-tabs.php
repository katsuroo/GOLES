<?php
if( have_rows($tabName) ):

    // loop to generate tabs
    while ( have_rows($tabName) ) : the_row();
        $title = get_sub_field('tab-title');
        $content = get_sub_field('tab-content');
        $image = get_sub_field('tab-image');
        ?>

        <?php echo do_shortcode('[tabby title='. $title .']');
        if (get_sub_field('tab-image')) :?>
            <div class="tab-image pull-left large-3 medium-3">
                <img src="<?php echo $image['url']?>" />
            </div>
        <?php endif; ?>


        <div class="tab-content <?php echo (get_sub_field('tab-image') == null? 'large-12 medium-12' : "large-8 medium-8")?>">
            <?php echo $content?>
        </div>
    <?php endwhile; ?>

    <?php echo do_shortcode('[tabbyending]');?>

<?php endif; ?>