<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	</div><!-- #main .wrapper -->
	<footer id="footer" role="contentinfo">
        <!--
        <?php
        query_posts('cat=23&posts_per_page=10');
        while (have_posts()) : the_post();
            ?>
                <?php the_post_thumbnail('full'); ?>
            <?php endwhile;
        wp_reset_query();?>
        -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>