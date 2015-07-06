<?php if( have_rows('grid-container') ):?>
<div class="gridContainer">
<div class="gridView">
    <ul class="accordion" data-accordion>

    <?php
    $gridData = [];
    $count = 0;

    while ( have_rows('grid-container') ) : the_row();
        $title = get_sub_field('grid-title');
        $content = get_sub_field('grid-content');
        $image = get_sub_field('grid-image') == null ? false : get_sub_field('grid-image')['url'];
        $show_image = get_sub_field('show-picture-in-grid');?>

        <li class="accordion-navigation">
            <a href="<?php echo '#panel' . $count; ?>">
                <div class="grid"></div>
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
                    <?php if($image && $show_image != null):?>
                        <img class= "large-3 medium-3" src="<?php echo $image ?>"/>
                    <?php endif;?>
                    <div class="grid-content-text <?php echo ($image && $show_image != null) ? "large-8 medium-8" : "large-12"?>">
                        <h3><?php echo $title; ?></h3>
                        <?php echo $content ?>
                    </div>
                </div>
            </div>
        </li>
    <?php endwhile;?>
    </ul>
</div>
</div>
<?php endif;?>
