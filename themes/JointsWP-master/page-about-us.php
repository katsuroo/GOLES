<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="row">

            <div id="main" class="about-us large-12 medium-12 columns" role="main">

                    <h2><?php the_title(); ?></h2>

                    <div class="page-content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <section class="entry-content large-8 pull-left" itemprop="articleBody">
                                <?php the_content(); ?>
                            </section> <!-- end article section -->

                        <?php endwhile; endif; ?>

                        <div class="google-map large-4 pull-right">
                            <?php echo do_shortcode('[map_bank map_id="5" map_width="33%" map_width_type="" map_height="230" map_height_type="" map_zoom= "13" scrolling_wheel="true" map_border="" border_width="" border_style="" border_color="" border_radius="" show_title="true"]') ?>
                            <h5 class="subheader"><small>Our Services are available to all those who live between the Brooklyn bridge and 14th Street, and East of Bowery / 3rd / 4th Avenue.</small></h5>
                        </div>
                        <div class="clear"></div>
                    </div>

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