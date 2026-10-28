<aside class="sidebar">

    <?php if (is_active_sidebar('sidebar-1')) : ?>

        <?php dynamic_sidebar('sidebar-1'); ?>

    <?php else : ?>

        <section class="widget">
            <h3>Cari Artikel</h3>
            <?php get_search_form(); ?>
        </section>

        <section class="widget">
            <h3>Kategori</h3>

            <ul>
                <?php
                wp_list_categories(array(
                    'title_li' => ''
                ));
                ?>
            </ul>
        </section>

        <section class="widget">
            <h3>Artikel Terbaru</h3>

            <ul>
                <?php
                $terbaru = get_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));

                foreach ($terbaru as $post) :
                ?>

                    <li>
                        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                            <?php echo esc_html(get_the_title($post->ID)); ?>
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>
        </section>

    <?php endif; ?>

</aside>