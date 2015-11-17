<?php
/**
 * Template Name: Noticias
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

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'posts_per_page' => 10,
                    'category_id' => 6,
                    'paged' => $paged,

                );

                //$the_query = new WP_Query( $args );
                //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                //$args = array('posts_per_page' => 10, 'paged' => $paged, 'cat' => 6 );
                //query_posts('cat=6&posts_per_page=10');
                query_posts($args);
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
                //wp_reset_query();
                ?>
                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
            </div>
        </article>

        </div><!-- impotant-content. -->
    <div class="sponsors">
        <?php get_sidebar(); ?>
    </div>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>