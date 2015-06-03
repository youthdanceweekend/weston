<?php get_header(); ?>

<main class="container animated fadeIn">
	<div id="content" class="site-content" role="main">
		<div class="row">
			<div class="col-sm-7">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<?php the_content(); ?>
					</article><!-- #post -->

					<?php comments_template(); ?>

				<?php endwhile; ?>
			</div>
			<div class="col-sm-5">
				<?php $sidebar = get_post_meta(get_the_ID(), 'sidebar', true); ?>
				<?php if ($sidebar): ?>
					<?= $sidebar ?>
				<?php else: ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
				<div class="ydw-panel ydw-panel--gradient margin-leader">
					<?php include("inc/tinyletter.php"); ?>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- #content -->
</main>

<?php get_footer(); ?>
