<?php get_header(); ?>

<?php get_template_part('partials/frontpage_slider') ?>

<div class="content-wrapper">

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->


	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
