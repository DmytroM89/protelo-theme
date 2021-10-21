<?php
/*
 * Template name: Blog
 */
get_header();

$posts = get_posts(array(
    'post_type' => 'post'
));
$categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'DESC'
));
?>

<div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<section class="s-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"><?php the_title() ?></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="rubrics mb-5 d-flex justify-content-center">
                    <?php foreach( $categories as $category ) : ?>
                        <a class="btn btn-default mx-2" href="<?php echo get_category_link( $category->term_id ); ?>" role="button"><?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                <div class="col-12 col-md-4">
                    <div class="card post-card">
                        <?php if (get_the_post_thumbnail_url()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="post_thumbnail">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <div class="d-grid gap-2">
                                <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-lg post-link" role="button"><?php pll_e('read');?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
