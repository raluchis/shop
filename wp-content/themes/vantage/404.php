<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<article id="post-0" class="post error404 not-found">

			<div id="page-not-found" class="entry-main">

				<?php do_action('vantage_entry_main_top') ?>

				<header class="entry-header">
					<h1 class="entry-title"><?php echo apply_filters( 'vantage_404_title', __( "Aceasta pagina nu exista.", 'vantage' ) ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php echo apply_filters( 'vantage_404_message', __( 'Incercati sa cautati informatia dorita cu ajutorul formularului de mai jos.', 'vantage' ) ); ?></p>

					<?php get_search_form(); ?>

					<p>
						Daca doriti mai multe informatii despre produsele noastre,  
						<a title="Produse" href="http://localhost/shop/produse-bune-la-cele-mai-mici-preturi/" target="_blank">catalogul nostru</a>
						va poate ajuta.
					</p>

					<p>
						Daca doriti mai multe informatii despre magazin, click 
						<a title="Magazin" href="http://localhost/shop/despre-magazin-cele-mai-mici-preturi/" target="_blank">aici</a>.
					</p>

				</div><!-- .entry-content -->

				<?php do_action('vantage_entry_main_bottom') ?>

			</div><!-- .entry-main -->

		</article><!-- #post-0 .post .error404 .not-found -->

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>