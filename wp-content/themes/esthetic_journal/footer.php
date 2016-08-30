<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!---->
<!--	</div><!-- .site-content -->
<!---->
<!--	<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--		<div class="site-info">-->
<!--			--><?php
//				/**
//				 * Fires before the Twenty Fifteen footer text for footer customization.
//				 *
//				 * @since Twenty Fifteen 1.0
//				 */
//				do_action( 'twentyfifteen_credits' );
//			?>
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?><!--</a>-->
<!--		</div><!-- .site-info -->
<!--	</footer><!-- .site-footer -->
<!---->
<!--</div><!-- .site -->
<footer role="contentinfo">
    <div class="row">
        <div class="row-content buffer clear-after">
            <section id="top-footer">
                <div class="widget column three"><!-- widget-->
                    <h4>Меню</h4>
                    <ul class="plain">
                        <li><a href="#">Головна</a></li>
                        <li><a href="#">Новини</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </div>
                <div class="widget column three">
                    <h4>Архіви</h4>
                    <ul class="plain">
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2016</a></li>
                    </ul>
                </div>
                <div class="widget meta-social column three">
                    <h4>Слідкуйте за нами</h4>
                    <ul class="inline">
                        <li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="#" class="vk-share border-box"><i class="fa fa-vk fa-lg"></i></a></li>
                    </ul>
                </div>
            </section><!-- top-footer -->
            <section id="bottom-footer">
                <p class="keep-left">&copy; 2016 <a href="http://vk.com/awaylastdays" alt="AwayLastDays">AwayLastDays</a>. All Rights Reserved.</p>
            </section><!-- bottom-footer -->
        </div><!-- row-content -->
    </div><!-- row -->
</footer>
<?php wp_footer(); ?>
<script id="dsq-count-scr" src="//estheticjournal.disqus.com/count.js"></script>
</body>
</html>
