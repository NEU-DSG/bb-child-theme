<?php do_action( 'fl_before_post' ); ?>
<article <?php post_class( 'fl-post' ); ?> id="fl-post-<?php the_ID(); ?>"<?php FLTheme::print_schema( ' itemscope="itemscope" itemtype="https://schema.org/CreativeWork"' ); ?>>

<!-- .fl-post-header -->
	<?php do_action( 'fl_before_post_content' ); ?>
	<div class="fl-post-content clearfix" itemprop="text">
		<?php $url = $_SERVER['HTTP_HOST'].'/';

		$fullurl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if($url == $fullurl){ echo " "; } else { ?><div class="fl-row fl-row-fixed-width padding-twenty"><h1 class="page-title"><?php echo the_title();?></h1></div><?php }?>
		<?php
			the_content();

			wp_link_pages( array(
				'before'         => '<div class="fl-post-page-nav">' . _x( 'Pages:', 'Text before page links on paginated post.', 'fl-automator' ),
				'after'          => '</div>',
				'next_or_number' => 'number',
			) );
			?>
	</div><!-- .fl-post-content -->
	<?php do_action( 'fl_after_post_content' ); ?>

</article>

<?php comments_template(); ?>
<?php do_action( 'fl_after_post' ); ?>
<!-- .fl-post -->
