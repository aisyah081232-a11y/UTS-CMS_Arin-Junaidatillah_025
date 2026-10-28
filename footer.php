<footer class="site-footer">
    <div class="container">

        <h3><?php bloginfo('name'); ?></h3>

        <p>
            Ruang untuk belajar, berbagi pengetahuan,
            dan menemukan inspirasi.
        </p>

        <p>
            &copy; <?php echo esc_html(wp_date('Y')); ?>
            <?php bloginfo('name'); ?>.
            Dibuat menggunakan WordPress.
        </p>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>