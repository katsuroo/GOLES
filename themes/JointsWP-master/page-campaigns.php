<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="row">

            <div id="main" class="about-us large-12 medium-12 columns" role="main">
                <!-- To see additional archive styles, visit the /partials directory -->
                <?php get_template_part( 'partials/loop-page', 'content' ); ?>

                    <?php get_template_part( 'partials/loop', 'grid' );?>

            </div> <!-- end #main -->


        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>