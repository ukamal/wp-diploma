
<?php get_header(); ?>

<div class="page-content">
	<div class="container">
		<div class="row">
			<?php echo do_shortcode('[dfs]'); ?>
			
			<?php while( have_posts() ) : the_post(); ?>
			<div <?php post_class('col-md-12'); ?>>
				<div class="spage-header">
					<?php if( has_post_thumbnail() ) : ?>
						<div class="post-img">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						</div>
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			
			<?php the_content(); ?>
			</div>
			
			<?php endwhile; ?>
		
		</div>
	</div>
</div><!--page-->

<?php get_footer(); ?>


