<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title(); ?></h1>


    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid  pt-5 pb-5">
    <?php endif; ?>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>