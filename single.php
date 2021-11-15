<?php get_header(); ?>

<div class="breadcrumbs-container d-flex mb-5 text-secondary justify-content-center">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<section class="s-post">
    <div class="container">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000"><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8" data-aos="fade-up" data-aos-duration="1000">
                    <?php the_content(); ?>
                </div>
            </div>

            <?php the_tags('Тэги: ', ' | ', ''); ?>

        <?php endwhile; ?>
    </div>
</section>


<?php /*previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'twentyten') . '</span> %title'); */?><!--
<?php /*next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'twentyten') . '</span>'); */?>
--><?php /*comments_template('', true); */?>

<?php get_footer(); ?>