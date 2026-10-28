<?php get_header(); ?>

<main id="konten">

    <section class="hero">
        <div class="container">

            <p><strong>BELAJAR • BERTUMBUH • BERBAGI</strong></p>

            <h1>
                Temukan Ide Baru,
                Tumbuhkan Potensimu.
            </h1>

            <p>
                RuangBelajar adalah tempat untuk membaca
                wawasan, menyimpan inspirasi, dan terus
                berkembang melalui pengetahuan.
            </p>

            <a class="button"
               href="#artikel-terbaru">
                Jelajahi Artikel
            </a>

        </div>
    </section>

    <section class="section" id="artikel-terbaru">
        <div class="container">

            <h2>Artikel Terbaru</h2>
            <p>Temukan bacaan untuk menambah wawasanmu.</p>

            <div class="post-grid">

                <?php
                $artikel = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish'
                ));

                if ($artikel->have_posts()) :

                    while ($artikel->have_posts()) :
                        $artikel->the_post();
                ?>

                    <article class="post-card">

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
                                    wp_trim_words(
                                        get_the_excerpt(),
                                        20
                                    )
                                );
                                ?>
                            </p>

                            <a href="<?php the_permalink(); ?>">
                                Baca Selengkapnya →
                            </a>

                        </div>
                    </article>

                <?php
                    endwhile;
                    wp_reset_postdata();

                else :
                ?>

                    <p>Belum ada artikel yang diterbitkan.</p>

                <?php endif; ?>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>