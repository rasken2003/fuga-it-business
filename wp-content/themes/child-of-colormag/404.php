<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'colormag_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<section class="error-404 not-found">
				<div class="page-content">

					<?php if ( ! dynamic_sidebar( 'colormag_error_404_page_sidebar' ) ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'おっと！ そのページは見つかりませんでした。', 'colormag' ); ?></h1>
						</header>
						<p><?php _e( 'そのページはこのロケーションではないように思えます。検索しなおしてください。', 'colormag' ); ?></p>
						<?php get_search_form(); ?>
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div><!-- #content -->
	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>