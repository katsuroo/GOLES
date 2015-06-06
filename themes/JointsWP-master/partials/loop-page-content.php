<h2><?php the_title(); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>
    </section> <!-- end article section -->

<?php endwhile; endif; ?>