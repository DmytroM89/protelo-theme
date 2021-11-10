<?php
/*
 * Template name: Main
 */

get_header(); ?>

    <section class="s-main" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="s-main-title">
                        <p><?php the_field('main_subtitle'); ?></p>
                        <h1><?php the_field('main_title'); ?></h1>
                    </div>
                    <div class="s-main-more" id="moreDetails">
                        <?php pll_e('more_details');?>
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="s-main-img">
                        <img src="<?php the_field('main_img'); ?>" alt="main_img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $serviceTitle = get_field('service_title');
    $services = get_field('services');

    if (!empty($services) && is_array($services)):
    ?>
    <section class="s-services bg-rect bg-rect--right" data-aos="fade-left" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php echo $serviceTitle; ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($services as $service): ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-xl-0">
                        <div class="service">
                            <div class="service-img" style="background-image: url('<?php echo $service['image']; ?>')">
                            </div>
                            <h5 class="service-name">
                                <?php echo esc_html( $service['service']->post_title ); ?>
                            </h5>
                            <a href="<?php echo $service['url']; ?>" class="btn btn-outline-warning service-more" role="button">
                                <?php pll_e('more_details');?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="btn-container">
                <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <?php pll_e('sign_up');?>
                </button>
            </div>

        </div>
    </section>
    <?php endif; ?>

    <?php
    $aboutTitle = get_field('about_title');

    if (!empty($aboutTitle) ):
    ?>
    <section class="s-about" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php echo $aboutTitle; ?></h2>
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
    <?php endif; ?>

    <section class="s-consultation" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="signup-container">
                        <h4><?php the_field('consultation_title', 'options'); ?></h4>
                        <p><?php the_field('consultation_description', 'options'); ?></p>
                        <?php echo do_shortcode(get_field('consultation_form', 'options')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $specialists = get_field('specialists');

    if (!empty($specialists) && is_array($specialists)):
    ?>
    <section class="s-specialists bg-rect bg-rect--left" data-aos="fade-right" data-aos-duration="2000">
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
    <?php endif; ?>

    <?php
    $advantages = get_field('advantages');

    if (!empty($advantages) && is_array($advantages)):
    ?>
    <section class="s-advantages" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title <?php if (!empty(get_field('advantage_title'))): ?>mb-3<?php endif; ?>">
                        <?php the_field('advantage_title'); ?>
                    </h2>
                    <?php if (!empty(get_field('advantage_subtitle'))): ?>
                        <p class="subtitle text-center"><?php the_field('advantage_subtitle'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($advantages as $item): ?>
                    <div class="col-12 col-md-3 mb-5 mb-md-0">
                        <div class="advantages-item">
                            <div class="icon">
                                <?php echo $item['icon']; ?>
                            </div>
                            <div class="description">
                                <p><b><?php echo $item['name']; ?></b></p>
                                <p class="mb-0"><?php echo $item['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (!empty(get_field('advantage_signup'))): ?>
                <div class="row d-flex justify-content-center mt-3 mt-md-5">
                    <div class="col-12 col-md-6 text-center">
                        <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            <?php the_field('advantage_signup'); ?>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $resultTitle = get_field('result_title');
    $theses = get_field('theses');
    $baSlider = get_field('ba_slider');

    if (!empty($resultTitle)):
    ?>
    <section class="s-results bg-rect bg-rect--right" data-aos="fade-left" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php echo $resultTitle; ?></h2>
                </div>
            </div>
            <?php if (!empty($theses)): ?>
            <div class="row justify-content-center">
                <?php foreach ($theses as $key=>$these): ?>
                <div class="col-12 col-md-3 <?php if (count($theses)-1 != $key): ?>mb-5 mb-lg-0<?php endif; ?>">
                    <div class="these">
                        <div class="these-icon"><?php echo $these['icon'];?></div>
                        <p class="these-text mb-0"><?php echo $these['text'];?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($baSlider)): ?>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="slider" id="mSlider">
                        <?php foreach ($baSlider as $baItem): ?>
                            <div class="slider-item">
                                <div class="result-photo -before">
                                    <img src="<?php echo $baItem['photo_before']; ?>" alt="before">
                                </div>
                                <div class="result-photo -after">
                                    <img src="<?php echo $baItem['photo_after']; ?>" alt="after">
                                </div>

                                <?php /*echo do_shortcode( '[compare]'.
                                    '<img src="' . $baItem['photo_before'] . '" alt="BEFORE">'.
                                    '<img src="' . $baItem['photo_after'] . '" alt="AFTER">'
                                    .'[/compare]');*/ ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $reviewTitle = get_field('review_title');
    $reviews = get_field('reviews');

    if (!empty($reviewTitle) && !empty($reviews)):
    ?>
    <section class="s-reviews" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php echo $reviewTitle; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider" id="sReviews">
                        <?php foreach ($reviews as $review): ?>
                            <div class="slider-item">
                                <div class="review">
                                    <i class="fas fa-quote-left fs-24"></i>
                                    <p class="review-text"><?php echo $review['text']; ?></p>
                                    <div class="author">
                                        <div class="author-photo">
                                            <img src="<?php echo $review['photo']; ?>" alt="author_photo">
                                        </div>
                                        <div class="author-data">
                                            <h5 class="name mb-0"><?php echo $review['name']; ?></h5>
                                            <p class="position mb-0"><?php echo $review['position']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="s-appointment" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="signup-container">
                        <h4><?php the_field('appointment-title', 'options'); ?></h4>
                        <p><?php the_field('appointment-description', 'options'); ?></p>
                        <?php echo do_shortcode(get_field('appointment-form', 'options')); ?>
                        <div class="reminder">
                            <p class="fw-bold mb-0"><?php the_field('appointment-reminder', 'options'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>