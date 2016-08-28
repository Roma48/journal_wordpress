<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main role="main">
    <div id="intro-wrap">
        <div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true"
             data-transition="fadeUp">
            <div class="intro-item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/767f6861-ffcd-4994-afdf-2a730a9be20f.jpg);">
                <div class="caption">
                    <h2>Esthetic</h2>
                    <p>Творчість у твоєму місті</p>
                    <a class="button white transparent" href="content.html">Читати</a>
                </div><!-- caption -->
<!--                <div class="photocaption">-->
<!--                    <h4>Фото зробив: <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>-->
<!--                </div><!-- photocaption -->
            </div>
            <div class="intro-item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vsco_071915.jpg);">
                <div class="caption">
                    <h2>Esthetic</h2>
                    <p>Мы индивидуальны</p>
                    <a class="button white transparent" href="#">Читать</a>
                </div><!-- caption -->
                <div class="photocaption">
                    <h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>
                </div><!-- photocaption -->
            </div>
            <div class="intro-item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/1922211_1113433452008380_836589375_n.jpg);">
                <div class="caption">
                    <h2>Esthetic</h2>
                    <p>Мы показываем город своими глазами</p>
                    <a class="button white transparent" href="#">Читать</a>
                </div><!-- caption -->
<!--                <div class="photocaption">-->
<!--                    <h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>-->
<!--                </div><!-- photocaption -->
            </div>
            <div class="intro-item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/vsco_080315.jpg);">
                <div class="caption">
                    <h2>Esthetic</h2>
                    <p>Мы креативные</p>
                    <a class="button white transparent" href="#">Читать</a>
                </div><!-- caption -->
<!--                <div class="photocaption">-->
<!--                    <h4>A shot by <a href="http://vk.com/awaylastdays">Vadim Bruklia</a></h4>-->
<!--                </div><!-- photocaption -->
            </div>
        </div><!-- intro -->
    </div><!-- intro-wrap -->

    <div id="main">
        <section class="row section">
            <div class="row-content buffer even clear-after">
                <div class="section-title"><h3>Останні новини</h3></div>
                <div class="grid-items blog-section masonry-style preload">
                    <?php
                    // Start the loop.
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('custom-content', get_post_format());
                    // End the loop.
                    ?>
                    <div class="shuffle-sizer three"></div>
                </div><!-- grid-items -->
                <div class="more-btn"><a class="button transparent aqua" href="news.html">Читати всі новини</a></div>
            </div>
        </section>

        <section class="row section">
            <div class="map" data-maplat="49.445773" data-maplon="32.062016" data-mapzoom="17" data-color=""
                 data-height="22.222" data-img="<?php echo get_template_directory_uri(); ?>/img/marker.png"
                 data-info="Мы находимся в Черкассах"></div>
        </section>

    </div><!-- id-main -->
</main><!-- main -->

<?php get_footer(); ?>
