<?php get_header(); ?>

<div class="container page-wrap">
    <section class="row">
    <div class="col-lg-3">
        <?php if(is_active_sidebar('page-sidebar')):?>
            <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>   
        </div>
    <div class="col-lg-9">
    <h2><?php the_title(); ?></h2>
    <?php get_template_part('/includes/section', 'content'); ?>
</div>
</section>

</div>


<?php get_footer(); ?>