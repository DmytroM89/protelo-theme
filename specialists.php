<?php
/*
 * Template name: Specialists
 */
get_header();

$specialists = get_field('specialists');
?>

<div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<section class="s-specialists" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"><?php the_field('specialist_title'); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($specialists as $key=>$spec): ?>
                <div class="col-12 col-md-6 col-lg-4 <?php if (count($specialists)-1 != $key): ?>mb-5<?php endif; ?>">
                    <div class="spec">
                        <div class="spec-photo" style="background-image: url('<?php echo $spec['photo'];?>')"></div>
                        <h4 class="spec-name"><?php echo $spec['name'];?></h4>
                        <p class="spec-description mb-0"><?php echo $spec['description'];?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
