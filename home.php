<?php get_header(); ?>

<main class="container section">

    <h1>Semua Artikel</h1>
    <p>Kumpulan tulisan terbaru dari RuangBelajar.</p>

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

            <p>Belum ada artikel untuk ditampilkan.</p>

        <?php endif; ?>

    </div>

    <?php
    the_posts_pagination(array(
        'prev_text' => '← Sebelumnya',
        'next_text' => 'Berikutnya →'
    ));
    ?>

</main>

<?php get_footer(); ?>