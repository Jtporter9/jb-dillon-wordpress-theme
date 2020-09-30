<?php get_header(); ?>

<div class="container">



    <h1><?php the_title();?></h1>

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <?php get_sidebar();?>
                </div>
                <div class="col-lg-9">

                    <?php if(has_post_thumbnail()):?>
                        <img class="img-fluid mb-5" src="<?php the_post_thumbnail_url('post_image');?>" alt="">
                    <?php endif; ?>

                    <?php if (have_posts()) : while(have_posts()) : the_post();?>

                    <?php the_content();?>

                    <?php endwhile; else: endif;?>
                </div>
            </div>


        </div>
    </div>
</div>

<?php get_footer(); ?>