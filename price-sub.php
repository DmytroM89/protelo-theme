<?php
/*
 * Template name: Price Sub
 */

get_header(); ?>

<?php
$services = get_field('services');

if (!empty($services) && is_array($services)):
    ?>
    <div class="breadcrumbs d-flex mb-5 text-secondary justify-content-center">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <section class="s-price-sub">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php pll_e('price');?></h2>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-12 col-md-8">
                    <a class="btn back-btn" onClick="history.back()" role="button">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <?php foreach ($services as $idx => $service): ?>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="service" data-bs-toggle="modal" data-bs-target="#serviceModal<?php echo $idx?>">
                                    <div class="service-image" style="background-image: url('<?php echo $service['image']; ?>')"></div>
                                    <div class="service-info">
                                        <h6 class="service-name"><?php echo $service['name']; ?></h6>
                                        <div class="service-price">
                                            <span class="price"><?php echo $service['price']; ?></span>
                                            <?php if (!empty($service['note'])): ?>
                                                <span class="note">
                                                    <i class="fas fa-info-circle"></i>
                                                    <?php echo $service['note']; ?>
                                                </span>
                                            <?php endif; ?>
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

    <!-- Modal Description Service -->
    <?php foreach ($services as $idx => $service): ?>
    <div class="modal fade -price" id="serviceModal<?php echo $idx?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <img src="<?php echo $service['image']; ?>" alt="service_image">
                    <h4 class="mt-3 fw-bold"><?php echo $service['name']; ?></h4>
                </div>
                <div class="modal-body">
                    <?php echo $service['description']; ?>
                </div>
                <div class="modal-footer d-grid gap-2">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><?php pll_e('close');?></button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>