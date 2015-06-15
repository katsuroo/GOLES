<?php
//if( have_rows($tabName) ):
//
//    // loop to generate tabs
//    while ( have_rows($tabName) ) : the_row();
//        $title = get_sub_field('tab-title');
//        $content = get_sub_field('tab-content');
//        $image = get_sub_field('tab-image');
//        ?>
<!---->
<!--        --><?php //echo do_shortcode('[tabby title='. $title .']');
//        if (get_sub_field('tab-image')) :?>
<!--            <div class="tab-image pull-left large-3 medium-3">-->
<!--                <img src="--><?php //echo $image['url']?><!--" />-->
<!--            </div>-->
<!--        --><?php //endif; ?>
<!---->
<!---->
<!--        <div class="tab-content --><?php //echo (get_sub_field('tab-image') == null? 'large-12 medium-12' : "large-8 medium-8")?><!--">-->
<!--            --><?php //echo $content?>
<!--        </div>-->
<!--    --><?php //endwhile; ?>
<!---->
<!--    --><?php //echo do_shortcode('[tabbyending]');?>
<!---->
<?php //endif; ?>

<?php
//if( have_rows($tabName) ):
//    $gridData = [];
//
//    // loop to generate tabs
//    while ( have_rows($tabName) ) : the_row();
//        $title = get_sub_field('tab-title');
//        $content = get_sub_field('tab-content');
//        $image = get_sub_field('tab-image');
//
//        $gridData[] = array($title,$content,$image['url']);
//
//    endwhile;
//    wp_localize_script( 'custom', 'gridData', $gridData );
//endif;
//?>
<!--<div id="page-grid"></div>-->

<div class="gridView">
    <ul class="accordion" data-accordion>
    <?php
    if( have_rows('tab-container') ):
        $gridData = [];
        $count = 0;

        // loop to generate tabs
        while ( have_rows('tab-container') ) : the_row();
            $title = get_sub_field('tab-title');
            $content = get_sub_field('tab-content');
            $image = get_sub_field('tab-image') == null ? false : get_sub_field('tab-image')['url'];?>

            <li class="accordion-navigation">
                <a href="<?php echo '#panel' . $count; ?>">
                    <div class="grid-titlebox">
                    </div>
                    <div class="grid-title"><?php echo $title; ?></div>
                    <?php if($image):?>
                        <img src="<?php echo $image ?>"/>
                    <?php else: ?>
                        <div class="grid-filler"></div>
                    <?php endif;?>
                </a>
                <div id="<?php echo 'panel' . $count; $count++;?>" class="content">
                    <div class="grid-content">
                        <div class="grid-close">
                        </div>
                        <?php if($image):?>
                            <img class= "large-3 medium-3" src="<?php echo $image ?>"/>
                        <?php endif;?>
                        <div class="grid-text <?php echo $image ? "large-8 medium-8" : "large-12"?>">
                            <h3><?php echo $title; ?></h3>
                            <?php echo $content ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endwhile;
    endif;?>
    </ul>
</div>