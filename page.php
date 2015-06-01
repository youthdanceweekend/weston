<?php get_header(); ?>

<main class="container animated fadeIn">
	<div id="content" class="site-content" role="main">
		<div class="row">
			<div class="col-sm-7">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="entry-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>

							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .entry-content -->

						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</article><!-- #post -->

					<?php comments_template(); ?>
				<?php endwhile; ?>
			</div>
			<div class="col-sm-5">
				<?php get_sidebar(); ?>
			</div>
	</div><!-- #content -->
</main>

<?php get_footer(); ?>
