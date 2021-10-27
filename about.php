<?php
/*
 * Template name: About
 */
get_header(); ?>

<div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<section class="s-about" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"><?php the_field('about_title'); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="about-text">
                    <?php the_field('about_text'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
