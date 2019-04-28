<?php get_header(); ?>

<section class="container content">
    <div class="row">
       <?php while(have_posts()): the_post() ; ?>
            <?php the_content(); ?> 
       <?php endwhile;?>
    </div>
</section>

<?php get_footer(); ?>



