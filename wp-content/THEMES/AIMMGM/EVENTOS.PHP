<?php
/**
 * Template Name: Eventos
 */

get_header(); ?>
<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="impotant-content">
        <?php the_post(); ?>
        <div class="titulo">
            <?php the_title(); ?>
        </div>

        <article class="article-contenido">
            <div class="texto-contenido">
                <?php
                global $more;
                query_posts('cat=5&posts_per_page=10');
                while (have_posts()) : the_post(); ?>
                    <div class="noticia-index clearfix">
                        <div class="imagen-noticia">
                            <a href="<?php  the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                        </div>
                        <div class="texto">
                            <div class="subtitulo-noticia">
                                <a href="<?php  the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="date">
                                <?php the_time('d/m/Y'); ?>
                            </div>
                            <div class="texto-noticia">
                                <?php $more = 0; ?>
                                <?php the_content('Continuar Leyendo'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                wp_reset_query();?>
            </div>
        </article>
        </div><!-- impotant-content. -->
        <div class="sponsors">
            <?php get_sidebar(); ?>
        </div>

    </div><!-- #content -->

</div><!-- #primary -->
<?php get_footer(); ?>