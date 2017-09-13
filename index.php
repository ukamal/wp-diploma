
<?php get_header(); ?>

<div class="page-header text-center">
	<p>Hello world</p>
</div>

<?php 
	$postClass = (!is_active_sidebar('blog-sidebar')) ? 'col-md-4' : '';
	if( have_posts() ) :
 ?>


<div class="post-list">
	<div class="container">
		<div class="row">
		<div class="col-md-<?php echo (is_active_sidebar('blog-sidebar')) ? '8' : '12'; ?>">
		<?php while( have_posts() ) : the_post() ; ?>
		
		<div <?php post_class( $postClass ); ?>>
		<div class="post-header">
			<?php if( has_post_thumbnail() ) : ?>
			<div class="post-img">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('post-image'); ?>
				</a>
			</div>
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<?php the_excerpt(); ?>
			</div>
			<?php endwhile; ?>
			</div>
			
			<?php if( is_active_sidebar('blog-sidebar')) :get_sidebar(); endif; ?>
			
			</div>
		</div>
	</div>
		<?php endif; ?>
		
	<?php get_footer(); ?>


		
		
		