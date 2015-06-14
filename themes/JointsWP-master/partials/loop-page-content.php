<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>
    </section> <!-- end article section -->

<?php endwhile; endif; ?>