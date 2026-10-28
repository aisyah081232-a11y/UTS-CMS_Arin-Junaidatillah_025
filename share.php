<?php get_header(); ?>

<main class="container section">

    <h1>
        Hasil pencarian:
        <?php echo esc_html(get_search_query()); ?>
    </h1>

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

            <p>Maaf, artikel yang dicari tidak ditemukan.</p>

            <?php get_search_form(); ?>

        <?php endif; ?>

    </div>

    <?php the_posts_pagination(); ?>

</main>

<?php get_footer(); ?>