<?php get_header(); ?>

    <div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

<section class="s-category">
    <div class="container">
        <div class="row" data-masonry='{"percentPosition": true }'>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
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
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <?php // Пагинация
                global $wp_query;
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'type' => 'list',
                    'prev_text' => __('« Сюда'),
                    'next_text' => __('Туда »'),
                    'total' => $wp_query->max_num_pages
                ));
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>