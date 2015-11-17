<?php
/**
 * Template Name: Contacto
 */

get_header(); ?>
<div id="primary" class="site-content">
    <div id="content" role="main">
        <?php the_post(); ?>
        <div class="titulo">
            <?php the_title(); ?>
        </div>
        <article class="article-contenido contacto clearfix">
                <div class="izq">
                    <?php the_content(); ?>
                </div>
            <div class="der">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/somos/9.jpg">
            </div>
        </article>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>