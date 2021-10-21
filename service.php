<?php
/*
 * Template name: Service
 */
get_header(); ?>

<div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="section-title"><?php the_field('name'); ?></h2>
        </div>
    </div>
</div>

<?php
$about = get_field('about');

if (!empty($about['title'])):
?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="section-title section-title--left <?php if (!empty($about['subtitle'])) : ?>mb-3<?php endif; ?>">
                    <?php echo $about['title']; ?>
                </h3>
                <?php if (!empty($about['subtitle'])): ?>
                    <p class="subtitle fst-italic"><?php echo $about['subtitle']; ?></p>
                <?php endif; ?>
                <p class="mb-0 mb-lg-4"><?php echo $about['description']; ?></p>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo $about['image']; ?>" class="img-fluid" alt="image">
            </div>
        </div>
        <?php if (!empty($about['appointment'])): ?>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                <?php echo $about['appointment']; ?>
            </button>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php
$whom = get_field('whom');

if (!empty($whom['title'])):
?>
<section class="whom bg-rect bg-rect--left"">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h3 class="section-title <?php if (!empty($whom['subtitle'])) : ?>mb-3<?php endif; ?>">
                    <?php echo $whom['title']; ?>
                </h3>
                <?php if (!empty($whom['subtitle'])): ?>
                    <p class="subtitle text-center"><?php echo $whom['subtitle']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <img src="<?php echo $whom['image']; ?>" class="img-fluid" alt="slider img">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$zone = get_field('zone');

if (!empty($zone['title'])):
?>
<section class="zone">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title <?php if (!empty($zone['subtitle'])) : ?>mb-3<?php endif; ?>">
                    <?php echo $zone['title']; ?>
                </h3>
                <?php if (!empty($zone['subtitle'])): ?>
                    <p class="subtitle text-center"><?php echo $zone['subtitle']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 mb-4 mb-lg-0">
                <img src="<?php echo $zone['image']; ?>" class="img-fluid" alt="slider img">
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <div class="zone-description"><?php echo $zone['description']; ?></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$beforeAfter = get_field('results');

if (!empty($beforeAfter['title'])):
?>
<section class="s-results bg-rect bg-rect--right">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"><?php echo $beforeAfter['title']; ?></h2>
            </div>
        </div>
        <?php if (!empty($beforeAfter['theses'])): ?>
            <div class="row justify-content-center">
                <?php foreach ($beforeAfter['theses'] as $these): ?>
                    <div class="col-12 col-md-3 mb-5 mb-lg-0">
                        <div class="these">
                            <div class="these-icon"><?php echo $these['icon'];?></div>
                            <p class="these-text mb-0"><?php echo $these['text'];?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($beforeAfter['ba_slider'])): ?>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="slider" id="mSlider">
                        <?php foreach ($beforeAfter['ba_slider'] as $baItem): ?>
                            <div class="slider-item">
                                <?php echo do_shortcode( '[compare]'.
                                    '<img src="' . $baItem['photo_before'] . '" alt="BEFORE">'.
                                    '<img src="' . $baItem['photo_after'] . '" alt="AFTER">'
                                    .'[/compare]'); ?>
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
$advantages = get_field('advantages');

if (!empty($advantages['items']) && is_array($advantages['items'])):
?>
<section class="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title <?php if (!empty($advantages['subtitle'])): ?>mb-3<?php endif; ?>">
                    <?php echo $advantages['title']; ?>
                </h3>
                <?php if (!empty($advantages['subtitle'])): ?>
                    <p class="subtitle text-center"><?php echo $advantages['subtitle']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($advantages['items'] as $item): ?>
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
        <?php if (!empty($advantages['appointment'])): ?>
            <div class="row d-flex justify-content-center mt-3 mt-md-5">
                <div class="col-12 col-md-6 text-center">
                    <button type="button" class="btn btn-warning  btn-lg mb-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        <?php echo $advantages['appointment']; ?>
                    </button>
                    <?php if (!empty($advantages['text_under_btn']) && !empty($advantages['appointment'])): ?>
                        <p class="mb-0 fst-italic"><?php echo $advantages['text_under_btn']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php
$how = get_field('how');

if (!empty($how['title'])):
?>
<section class="how bg-rect bg-rect--left">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title <?php if (!empty($how['subtitle'])): ?>mb-3<?php endif; ?>">
                    <?php echo $how['title']; ?>
                </h3>
                <?php if (!empty($how['subtitle'])): ?>
                    <p class="subtitle text-center"><?php echo $how['subtitle']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <video class="w-100" src="<?php echo $how['video']; ?>" controls></video>
            </div>
        </div>

        <?php if (!empty($how['items']) && is_array($how['items'])): ?>
            <div class="row">
                <?php foreach ($how['items'] as $item): ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="how-item">
                            <img src="<?php echo $item['image']; ?>" class="img-fluid" alt="how img">
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php
$appointment = get_field('appointment');

if (!empty($appointment['title'])):
?>
<section class="s-appointment -service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="signup-container">
                    <h4 class="<?php if (!empty($appointment['subtitle'])): ?>mb-3<?php endif; ?>">
                        <?php echo $appointment['title']; ?>
                    </h4>
                    <?php if (!empty($appointment['subtitle'])): ?>
                        <p class="subtitle text-center"><?php echo $appointment['subtitle']; ?></p>
                    <?php endif; ?>

                    <?php echo do_shortcode(get_field('appointment-form', 'options')); ?>

                    <?php if (!empty($appointment['text_under_btn'])): ?>
                        <p class="text-under"><?php echo $appointment['text_under_btn']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$contraindications = get_field('contraindications');

if (!empty($contraindications['title'])):
?>
<section class="contraindications bg-rect bg-rect--right">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h3 class="section-title <?php if (!empty($contraindications['subtitle'])): ?>mb-3<?php endif; ?>">
                    <?php echo $contraindications['title']; ?>
                </h3>
                <?php if (!empty($contraindications['subtitle'])): ?>
                    <p class="subtitle text-center"><?php echo $contraindications['subtitle']; ?></p>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <?php echo $contraindications['description']; ?>
                </div>
            </div>
        </div>
        <?php if (!empty($contraindications['appointment'])): ?>
            <div class="row d-flex justify-content-center mt-3 mt-md-5">
                <div class="col-12 col-md-6 text-center">
                    <button type="button" class="btn btn-warning  btn-lg mb-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        <?php echo $contraindications['appointment']; ?>
                    </button>
                    <?php if (!empty($contraindications['text_under_btn']) && !empty($contraindications['appointment'])): ?>
                        <p class="mb-0 fst-italic"><?php echo $contraindications['text_under_btn']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php
$opinion = get_field('opinion');

if (!empty($opinion['title'])):
?>
<section class="opinion">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"><?php echo $opinion['title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo $opinion['icon']; ?>
                <div class="opinion-text">
                    <p class="mb-0"><?php echo $opinion['opinion']; ?></p>
                </div>
                <div class="opinion-expert">
                    <div class="expert-photo">
                        <img src="<?php echo $opinion['expert_photo']; ?>" alt="expert_photo">
                    </div>
                    <div class="expert-info">
                        <h5 class="name"><?php echo $opinion['expert_name']; ?></h5>
                        <p class="position"><?php echo $opinion['expert_position']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
