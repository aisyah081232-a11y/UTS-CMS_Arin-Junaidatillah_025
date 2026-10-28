<?php get_header(); ?>

<main class="container section">

    <div class="content-layout">

        <div>

            <?php while (have_posts()) : the_post(); ?>

                <article class="article">

                    <div class="post-meta">
                        <?php echo esc_html(get_the_date()); ?>
                        |
                        Oleh <?php the_author(); ?>
                    </div>

                    <h1><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <p>
                        Kategori:
                        <?php the_category(', '); ?>
                    </p>

                    <p>
                        <?php the_tags('Tag: ', ', '); ?>
                    </p>

                </article>

                <p>
                    <?php previous_post_link('%link', '← Artikel sebelumnya'); ?>
                    &nbsp; | &nbsp;
                    <?php next_post_link('%link', 'Artikel berikutnya →'); ?>
                </p>

                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>

            <?php endwhile; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

</main>

<?php get_footer(); ?>