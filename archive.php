
<?php get_header(); ?>

<main class="container section">

    <h1><?php the_archive_title(); ?></h1>

    <?php the_archive_description(); ?>

    <div class="post-grid">

        <?php if (have_posts()) : ?>

            <?php
            while (have_posts()) :
                the_post();

                get_template_part(
                    'template-parts/post',
                    'card'
                );

            endwhile;
            ?>

        <?php else : ?>

            <p>Tidak ada artikel dalam arsip ini.</p>

        <?php endif; ?>

    </div>

    <?php the_posts_pagination(); ?>

</main>

<?php get_footer(); ?>