<?php get_header(); ?>

<main class="container section">

    <h1>Artikel RuangBelajar</h1>

    <div class="content-layout">

        <div>
            <?php if (have_posts()) : ?>

                <div class="post-grid">

                    <?php
                    while (have_posts()) :
                        the_post();

                        get_template_part(
                            'template-parts/post',
                            'card'
                        );

                    endwhile;
                    ?>

                </div>

                <?php
                the_posts_pagination(array(
                    'prev_text' => '← Sebelumnya',
                    'next_text' => 'Berikutnya →'
                ));
                ?>

            <?php else : ?>

                <p>Belum ada artikel.</p>

            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>

    </div>

</main>

<?php get_footer(); ?>