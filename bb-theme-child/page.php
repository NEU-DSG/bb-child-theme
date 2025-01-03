<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
				<?php FLTheme::sidebar( 'left' ); ?>
		<div class="fl-content col-md-12">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', 'page' );
				endwhile;
			endif;
			?>
		</div>
				<?php FLTheme::sidebar( 'right' ); ?>
	</div>
</div>

<?php get_footer(); ?>
