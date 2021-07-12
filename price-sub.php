<?php
/*
 * Template name: Price Sub
 */

get_header(); ?>

<?php
$services = get_field('services');

if (!empty($services) && is_array($services)):
    ?>
    <section class="s-price-sub p-section pt-4">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-4">
                    <a class="btn back-btn" onClick="history.back()" role="button">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="row">
                        <?php foreach ($services as $idx => $service): ?>
                            <div class="col-12 mb-3">
                                <div class="service" data-bs-toggle="modal" data-bs-target="#serviceModal<?php echo $idx?>">
                                    <div class="service-image" style="background-image: url('<?php echo $service['image']; ?>')"></div>
                                    <div class="service-info">
                                        <h6 class="service-name"><?php echo $service['name']; ?></h6>
                                        <div class="service-price"><?php echo $service['price']; ?></div>
                                        <?php if (!empty($service['note'])): ?>
                                            <div class="service-note">
                                                <i class="fas fa-info-circle"></i>
                                                <?php echo $service['note']; ?>
                                            </div>
                                        <?php endif; ?>
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
    <div class="modal fade" id="serviceModal<?php echo $idx?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <img src="<?php echo $service['image']; ?>" alt="service_image">
                    <h3 class="mt-3 fw-bold"><?php echo $service['name']; ?></h3>
                </div>
                <div class="modal-body">
                    <?php echo $service['description']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>