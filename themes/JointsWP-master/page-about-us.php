<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="row">

            <div id="main" class="about-us large-12 medium-12 columns" role="main">

                <div class="page-content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <section class="entry-content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->

                    <?php endwhile; endif; ?>
                    <div class="clear"></div>

                </div>

                <?php get_template_part( 'partials/loop', 'grid' );?>
            </div> <!-- end #main -->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
