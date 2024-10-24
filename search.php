<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">
		<h1 class="bg-dark-subtle px-3 overflow-hidden ">Search Results: <span class="text-bg-warning"><?php echo get_search_query();?></span></h1>
		<?php get_template_part('/includes/section', 'searchresult'); ?>
	</div>
</section>

<?php get_footer(); ?>

