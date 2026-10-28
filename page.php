<?php get_header(); ?>

<main class="container section">

    <?php while (have_posts()) : the_post(); ?>

        <article class="article">

            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>p