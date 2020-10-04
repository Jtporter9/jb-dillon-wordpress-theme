<?php get_header(); ?>

<div class="about">
    <div id="hero">
        <div class="custom-hero-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center h-100 py-5">
            <div class="hero-content page-width text-center">
                <h2 class="my-3">About JB Dillon</h2>
            </div>
        </div>
    </div>
    
    <div class="container">
    
        <div class="content">
            <div class="container">
    
                <div class="row">
                    <div class="col-lg-12"> 
    
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
</div>


<?php get_footer(); ?>