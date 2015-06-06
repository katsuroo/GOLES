<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="centered large-10 medium 12">

            <div id="main" class="about-us large-12 medium-12 columns" role="main">
                <!-- To see additional archive styles, visit the /partials directory -->
                <?php get_template_part( 'partials/loop-page', 'content' ); ?>

                <div class="tabs">
                    <?php
                    $tabName = 'tab-container';
                    set_query_var( 'tabName', $tabName );
                    get_template_part( 'partials/loop', 'tabs' );
                    ?>
                </div>

            </div> <!-- end #main -->


        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>