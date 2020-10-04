<?php get_header(); ?>

<div id="hero">
    <div class="custom-hero-overlay"></div>
    <div class="container d-flex align-items-center justify-content-center h-100 py-5">
        <div class="hero-content page-width text-center">
            <div class="my-3">
                <img src="<?php bloginfo('template_directory');?>/assets/white-logo.svg" class="img-fluid">
            </div>
            <h2 class="my-3">Handmade boots that feel like singing along to your favorite song</h2>
            <div class="my-3">
                <p>Only the best boot made by real people in the “location” Mexico</p>
            </div>
            <a href="/collections" class="btn btn-primary my-3" aria-label="Shop All Calfskin Boots">Shop boots</a>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

        <?php endwhile; else: endif;?>
    </div>
</div>

<?php get_footer();?>