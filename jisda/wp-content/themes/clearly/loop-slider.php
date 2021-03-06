<?php
/**
 * Just displays a slider loop. Intended to be included in child themes using get_template_part('loop', 'slider'). Also works with SiteOrigin page builder loop widget.
 *
 * @package clearly
 * @since clearly 1.0
 * @license GPL 2.0
 */
?>

<?php if ( have_posts() ) : ?>

<div class="flexslider-wrapper">
	<div class="flexslider">
		<ul class="slides">
			<?php while ( have_posts() ) : the_post(); if( has_post_thumbnail() ) : ?>
				<li class="slide">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('clearly-slide'); ?>
						<div class="flex-caption">
							<h3><?php the_title() ?></h3>
						</div>
					</a>
				</li>
			<?php endif; endwhile; ?>
		</ul>
	</div>
</div>

<?php endif; ?>