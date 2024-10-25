<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    
<?php if(has_post_thumbnail()):?>
    
    <h2><?php the_title(); ?></h2>
    <div class="row">
    <div class="col-lg-6">
    <div class="gallery">
    <a href="<?php the_post_thumbnail_url('blog-large');?>">
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-4 img-thumbnail">
    </a>
    </div>
    </div>
    <?php endif; ?>

    <div class="col-lg-6">
        <?php get_template_part('/includes/section', 'blogcontent'); ?>
        <?php wp_link_pages(); ?>
        <button class="btn btn-primary">Get More Info</button>
         <div class="py-2" >
         <?php if(get_post_meta($post->ID, 'Color', true)):?>
            <li>Color : <?php echo get_post_meta($post->ID, 'Color', true) ?></li>
            <?php endif;?> 
            <?php if(get_post_meta($post->ID, 'Register', true)):?> 
            <li>Registration : <?php echo get_post_meta($post->ID, 'Register', true) ?></li>
            <?php endif;?> 
            </div>   
       

    </div>
  
</div>

</div>
</section>

<?php get_footer(); ?>