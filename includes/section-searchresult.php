<?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="card my-5">
<div class="card-body d-flex justify-content-center align-item-center gap-4">
<div class="blog-content">
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid img-thumbnail">
        
        <?php endif; ?>
    </div>
      <div>
        <h3><?php the_title();?></h3>
          <?php the_excerpt();?>
          <a class="btn btn-primary" href="<?php the_permalink(); ?> ">ReadMore</a>
        </div>  
</div>
</div>    
<?php endwhile; else:?>
    <div class="d-flex mx-auto justify-content-center align-content-center">
    <!-- <img src="path/to/search.jpg" alt=""> -->
        <h3>There Are No Search For  <?php echo get_search_query();?></h3>
    </div>
<?php endif;?>

