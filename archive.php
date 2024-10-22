<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">
		
		<?php get_template_part('/includes/section', 'archive'); ?>
	
</div>
</section>


<?php get_footer(); ?>

<?php
	// global $wp_query;
	// $big = 999999999;
	
	// echo paginate_links( array(
		// 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		// 'format' => '?paged=%#%',
		// 'current' => max( 1, get_query_var('paged') ),
		// 'total' => $the_query->max_num_pages
	// ));
	?>