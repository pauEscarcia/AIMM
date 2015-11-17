<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    <?php
    query_posts('cat=23&posts_per_page=20');
    while (have_posts()) : the_post();
    $url = get_post_meta( get_the_ID(), 'url', true );
        ?>
        <a href="<?php echo $url ?>" target="_BLANK">
            <?php the_post_thumbnail('full'); ?>
        </a>
    <?php endwhile;
    wp_reset_query();?>