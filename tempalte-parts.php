<article <?php post_class('post-card'); ?>>

    <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium_large');
        }
        ?>
    </a>

    <div class="post-card-content">

        <div class="post-meta">
            <?php echo esc_html(get_the_date()); ?>
        </div>

        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <p>
            <?php
            echo esc_html(
                wp_trim_words(get_the_excerpt(), 20)
            );
            ?>
        </p>

        <a href="<?php the_permalink(); ?>">
            Baca Selengkapnya →
        </a>

    </div>
</article>