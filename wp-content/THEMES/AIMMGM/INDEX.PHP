<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id='coin-slider'>
    <?php
    query_posts('posts_per_page=10&cat=-23');
    while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink();?>" target="_blank">
                <?php the_post_thumbnail(); ?>
                <span>
                    <div class="title_pic">
                        <?php the_title(); ?>
                    </div>
                    <br><br>
                    <div class="date_pic">
                        <?php the_time('d/m/Y'); ?>
                    </div>
                </span>
            </a>
        <?php endwhile;
    wp_reset_query();?>
</div>
<div class="padd"><br>
    <a href="http://www.convencionminerazac2014.com/"><img class="displayed" src="http://aimmgmzacatecas.com/wp-content/uploads/2014/03/logoEMZ2.png" > </a>
</div>
<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="impotant-content">
            <article class="article-contenido">
                <?php

                query_posts('page_id=8');
                the_post();
                ?>
                    <div class="titulo">
                <?php
                    the_title();
                ?>
                    </div>

                    <div class="texto">
                        Somos una Asociación de profesionales de la Industria Minera con
                        el objetivo de unir a todas las personas que conforman el sector
                        incluyendo metalurgia, geología y las ramas relacionadas, con el
                        fin de mejorar la formación profesional, impulsar las Ciencias de
                        la Tierra y luchar por el mejor desarrollo y eficiencia de la
                        industria minero-metalúrgica en Zacatecas.
                <br>
                        <a href="<?php  the_permalink(); ?>" class="more-link">Continuar leyendo</a>
                    </div>
                <?php
                wp_reset_query();
                ?>
                <div class="puntos"></div>
            </article>
            <article class="article-contenido">
                <div class="titulo">
                    Noticias
                </div>
                <div class="subtitulo">
                    Recientes
                </div>

                <?php
                global $more;
                query_posts('posts_per_page=5&cat=-23');
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

                            <div class="texto-noticia">
                                <?php $more = 0; ?>
                                <?php the_content('Continuar Leyendo'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                wp_reset_query();?>
                <a href="http://aimmgmzacatecas.com/?page_id=85">Más Noticias</a>

            <!--
                <div class="noticia-index clearfix">
                    <div class="imagen-noticia">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/artlead_mine-420x0.jpg">
                    </div>
                    <div class="texto">
                        <div class="subtitulo-noticia">
                            Afectará a sector acerero impuestos verdes y a la minería
                        </div>
                        <div class="texto-noticia">
                            Ciudad de México • El sector de acero en México podría verse afectado de manera importante de ser aplicados los impuestos verdes y 7.5 por ciento a la utilidad minera, como se contempla en la propuesta de reforma hacendaria.

                            Alonso Ancira, presidente de la Cámara Nacional de la Industria del Hierro y del Acero (Canacero), afirmó que el sector está de acuerdo con la serie de reformas que piensa llevar a cabo el gobierno, pues con ello se alcanzaría una mayor competitividad, sin embargo, dijo que en el caso del impuesto verde, que tiene que ver con los bonos de carbono, dañarían a la industria del acero, ya que en el extranjero éstos tienen un valor de 32 centavos, mientras que en México oscilarían en 5 dólares.
                        </div>
                    </div>
                </div>

                -->
                <div class="puntos"></div>
            </article>
            <article class="article-contenido">
                <div class="titulo">
                    Precios de los Metales
                </div>
                <div class="centro">
                    <div><a href="http://www.infomine.com/investment/metal-prices/gold/1-week/" target="_blank"><img border="0" src="http://charts.infomine.com?345" alt="1 Week Gold Prices - Gold Price Chart" width="180" height="150"/></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/silver/1-week/" target="_blank"><img border="0" src="http://charts.infomine.com?364" alt="1 Week Silver Prices - Silver Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/palladium/1-week/" target="_blank"><img border="0" src="http://charts.infomine.com?409" alt="1 Week Palladium Prices - Palladium Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/platinum/1-week/" target="_blank"><img border="0" src="http://charts.infomine.com?351" alt="1 Week Platinum Prices - Platinum Price Chart" width="180" height="150" /></a></div>

                    <div><a href="http://www.infomine.com/investment/metal-prices/aluminum/1-week/"><img border="0" src="http://charts.infomine.com?290" alt="1 Week Aluminum Prices - Aluminum Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/copper/1-week/"><img border="0" src="http://charts.infomine.com?307" alt="1 Week Copper Prices - Copper Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/lead/1-week/"><img border="0" src="http://charts.infomine.com?347" alt="1 Week Lead Prices - Lead Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/nickel/1-week/"><img border="0" src="http://charts.infomine.com?268" alt="1 Week Nickel Prices - Nickel Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/tin/1-week/"><img border="0" src="http://charts.infomine.com?359" alt="1 Week Tin Prices - Tin Price Chart" width="180" height="150" /></a></div>
                    <div><a href="http://www.infomine.com/investment/metal-prices/zinc/1-week/"><img border="0" src="http://charts.infomine.com?367" alt="1 Week Zinc Prices - Zinc Price Chart" width="180" height="150" /></a></div>
                </div>
            </article>
        </div><!-- #content -->
        <div class="sponsors">
            <?php get_sidebar( 'front' ); ?>
        </div>
    </div>

</div><!-- #primary -->

<?php get_footer(); ?>