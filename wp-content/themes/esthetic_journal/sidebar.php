<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside role="complementary" class="sidebar column three last">
		<div class="widget widget_search">
			<form role="search">
				<span class="pre-input"><i class="icon icon-search"></i></span>
				<input type="text" placeholder="Поиск" value="" class="plain buffer">
			</form>
		</div>
		<div class="widget">
			<h4>Не знаю возможно тут будет реклама</h4>
			<div class="textwidget">
				Реклама - это не всегда плохо, порой ты видишь хорошие вещи, которые давно хотел, но не находил, а порой лучше бы не видеть эту рекламу. Но все же лучше реклама в интернете, чем тупые банеры, которые висят по всему городу.
			</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
		</div>
		<div class="widget">
			<h4>Рубрики</h4>
			<ul class="plain">
				<li><a href="#">Мода</a></li>
				<li><a href="#">Люди</a></li>
				<li><a href="#">Город</a></li>
				<li><a href="#">Мир</a></li>
			</ul>
		</div>
	</aside>

<?php endif; ?>
