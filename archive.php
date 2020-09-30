<?php get_header(); ?>

<div class="container">


    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <?php get_sidebar();?>
                </div>
                <div class="col-lg-9">
                    <?php if (have_posts()) : while(have_posts()) : the_post();?>

                    <?php if(has_post_thumbnail()):?>
                        <a href="<?php the_permalink();?>">
                            <img class="img-fluid mb-5" src="<?php the_post_thumbnail_url('post_image');?>" alt="">
                        </a>
                    <?php endif; ?>

                    <a href="<?php the_permalink();?>">
                        <h1><?php the_title();?></h1>
                    </a>

                    <?php the_excerpt();?>

                    <?php endwhile; else: endif;?>

                    <!-- Pagination code -->
                    <?php
                        global $wp_query;
                        
                        $big = 999999999; // need an unlikely integer
                        
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                        ) );
                        ?>

                </div>
            </div>


        </div>
    </div>
</div>

<?php get_footer(); ?>