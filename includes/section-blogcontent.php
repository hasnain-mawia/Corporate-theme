<?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>

<p class="text-dark btn btn-warning"><?php echo get_the_date('l jS F,Y');?></p>
<!-- <h1><?php the_title();?></h1> -->
 <!-- This is a single content page -->
<?php the_content();?>


<?php  
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
?>

<div class="d-flex align-content-center gap-5 m-0">
    <p class="text-dark btn btn-warning">Posted By <?php echo $fname. ' ' . $lname?></p>
    
    <?php 
$tags = get_the_tags();
foreach($tags as $tag):?>
<a href="<?php echo get_tag_link($tag->term_id);?>" class="btn btn-success">
<?php echo $tag->name;?>
</a>

<?php endforeach; ?>
</div>

<?php endwhile; else: endif;?>

